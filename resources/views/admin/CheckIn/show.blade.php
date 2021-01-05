@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($avaters as $avater)
                @php 
                    $current = date('Y-m-d');
                @endphp

                @if($avater->name == Auth::user()->name && $avater->AttDate == $current)
                    <div class="overlay"><canvas id="reflay" style="position: absolute;"></canvas></div>
                    <img src="{{ asset('phpfile/img/') }}/{{$avater->avaters_IMG}}" alt="" id="refimg">
                @endif
            @endforeach
        </div>
    </div>
</div>
<script src="{{ asset('js/face-api.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        async function face() {

            const MODEL_URL = "{{ asset('models/') }}"

            await faceapi.loadSsdMobilenetv1Model(MODEL_URL)
            await faceapi.loadFaceLandmarkModel(MODEL_URL)
            await faceapi.loadFaceRecognitionModel(MODEL_URL)

            const img = document.getElementById('refimg')
            let fullFaceDescriptions = await faceapi.detectAllFaces(img).withFaceLandmarks().withFaceDescriptors()
            const canvas = $('#reflay').get(0)
            faceapi.matchDimensions(canvas, img)

            fullFaceDescriptions = faceapi.resizeResults(fullFaceDescriptions, img)
            faceapi.draw.drawDetections(canvas, fullFaceDescriptions)

            //You want make sure the photo
            const labels = []
            @foreach($usersaa as $user)
                labels.push('{{$user->name}}')
            @endforeach

            const labeledFaceDescriptors = await Promise.all(
                labels.map(async label => {
                    // fetch image data from urls and convert blob to HTMLImage element
                    const imgUrl = `{{ asset('phpfile/avater/') }}/${label}.jpg`
                    const img = await faceapi.fetchImage(imgUrl)

                    // detect the face with the highest score in the image and compute it's landmarks and face descriptor
                    const fullFaceDescription = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()

                    if (!fullFaceDescription) {
                        throw new Error(`no faces detected for ${label}`)
                        alert("Try Angin");
                        
                    }

                    const faceDescriptors = [fullFaceDescription.descriptor]
                    return new faceapi.LabeledFaceDescriptors(label, faceDescriptors)
                })
            );

            const maxDescriptorDistance = 0.6
            const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, maxDescriptorDistance)

            const results = fullFaceDescriptions.map(fd => faceMatcher.findBestMatch(fd.descriptor))

            results.forEach((bestMatch, i) => {
                const box = fullFaceDescriptions[i].detection.box
                const text = bestMatch.toString()
                const drawBox = new faceapi.draw.DrawBox(box, {
                    label: text
                })
                drawBox.draw(canvas)
            })

            console.log(img);
        }
        face()
    })
</script>

@endsection