var modelViewer = document.getElementById("model");
modelViewer.addEventListener("mouseover", wave);
// modelViewer.addEventListener("click", run);
modelViewer.addEventListener("mouseout", none);

function wave() {
    modelViewer.animationName = "Wave";
}

function run() {
    modelViewer.animationName = "Running";
}

function none() {
    modelViewer.animationName = "none";
}

// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
var modal3 = document.getElementById('id04');
var modal4 = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}

function avatar() {
    document.getElementById('id05').style.display = 'block';
}

function loading() {
    document.getElementById('id04').style.display = 'block';
    var num = Math.floor(Math.random() * 5000) + 1000;
    console.log(num);
    myVar = setTimeout(aleat, num);
}

function close() {
    document.getElementById('id01').style.display = 'none';
}

function open() {
    document.getElementById('id01').style.display = 'block';
}

function aleat() {
    // document.getElementById('id02').style.display = 'block';
    serach();
    modelViewer.animationName = "none";
    modal.style.display = "none";
}

function email() {
    document.getElementById("keyword").value = "Email";
}

function leave() {
    document.getElementById("keyword").value = "Apply for Vacation";
}

function salary() {
    document.getElementById("keyword").value = "Salary";
}

function createProject() {
    document.getElementById("keyword").value = "Create Project";
}

function Manual() {
    document.getElementById("keyword").value = "User Manual";
}

function Login() {
    document.getElementById("keyword").value = "login";
}

function Home() {
    document.getElementById("keyword").value = "Home Pages";
}

function dashboard() {
    document.getElementById("keyword").value = "dashboard";
}

function serach() {
    var keyword = document.getElementById('keyword').value;
    var userID = document.getElementById('userid').value;
    var add = "http://localhost:8000/";
    switch (keyword) {
        case "dashboard":
            location.href = add + 'home';
            break;
        case "login":
            location.href = add + 'login';
            break;
        case "Home Pages":
            location.href = add;
            break;
        case "Email":
            location.href = add + 'Email';
            break;
        case "Apply for Vacation":
            location.href = add + 'leave/create';
            break;
        case "Salary":
            //user information
            location.href = add + 'home/Information/' + userID;
            break;
        case "Create Project":
            location.href = add + 'Project/create';
            break;
        case "User Manual":
            // user manual
            location.href = add;
            break;
        default:
            document.getElementById('id02').style.display = 'block';
    }
}

function leave() {
    location.href = 'http://localhost:8000/leave/create';
}

function uploadavater() {
    var fileInput = document.getElementById('avatar_file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
        imagePreview.style.display = "none";
    } else {
        //Image preview
        avatarupload.style.display = "block";
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatarupload').innerHTML = '<br><img src="' + e.target.result + '" width="300px" height="300px"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}

function optionSelect() {
    var d = document.getElementById('roles');
    var displaytext = d.options[d.selectedIndex].text;
    document.getElementById('txtvalue').value = displaytext;
}

function Manual() {
    document.getElementById("div1").style.display = "block";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
}

function job() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "block";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
}

function chart() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "block";
    document.getElementById("div4").style.display = "none";
}

function login() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "block";
}

//  After Login
function dashboard() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "block";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function company() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "block";
}

function user() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "block";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function project() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "block";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function calender() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "block";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function checkin() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "block";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function leave() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "block";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function salary() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "block";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function email() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "block";
    document.getElementById("div13").style.display = "none";
}