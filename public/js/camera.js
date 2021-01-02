Webcam.set({
    width: 490,
    height: 390,
    image_format: 'jpg',
    jpg_quality: 300
});

Webcam.attach('#my_camera');

function take_snapshot() {
    Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
    });
}