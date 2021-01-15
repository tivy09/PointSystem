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

function emailrobot() {
    document.getElementById("keyword").value = "Email";
}

function leaverobot() {
    document.getElementById("keyword").value = "Apply for Vacation";
}

function salaryrobot() {
    document.getElementById("keyword").value = "Salary";
}

function createProjectrobot() {
    document.getElementById("keyword").value = "Create Project";
}

function Manualrobot() {
    document.getElementById("keyword").value = "User Manual";
}

function Loginrobot() {
    document.getElementById("keyword").value = "login";
}

function Homerobot() {
    document.getElementById("keyword").value = "Home Pages";
}

function dashboardrobot() {
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
            location.href = 'http://localhost:8000/UserManual';
            break;
        default:
            document.getElementById('id02').style.display = 'block';
    }
}

function leavebutton() {
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
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div14").style.display = "none";
    document.getElementById("div13").style.display = "none";

}

function job() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "block";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div14").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function chart() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "block";
    document.getElementById("div4").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div14").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

function login() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "block";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div14").style.display = "none";
    document.getElementById("div13").style.display = "none";
}

//  After Login
function dashboard() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
    document.getElementById("div5").style.display = "block";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
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
    document.getElementById("div14").style.display = "none";
    document.getElementById("div14").style.display = "none";
}

function information() {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div5").style.display = "none";
    document.getElementById("div6").style.display = "none";
    document.getElementById("div7").style.display = "none";
    document.getElementById("div8").style.display = "none";
    document.getElementById("div9").style.display = "none";
    document.getElementById("div10").style.display = "none";
    document.getElementById("div11").style.display = "none";
    document.getElementById("div12").style.display = "none";
    document.getElementById("div13").style.display = "none";
    document.getElementById("div14").style.display = "block";
}

function Value1(id) {
    for (var i = 1; i <= 4; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value2(id) {
    for (var i = 5; i <= 8; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value3(id) {
    for (var i = 9; i <= 12; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value4(id) {
    for (var i = 13; i <= 16; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value5(id) {
    for (var i = 17; i <= 20; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value6(id) {
    for (var i = 21; i <= 24; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value7(id) {
    for (var i = 25; i <= 28; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value8(id) {
    for (var i = 29; i <= 32; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function Value9(id) {
    for (var i = 33; i <= 36; i++) {
        document.getElementById("check" + i).checked = false;
    }
    document.getElementById(id).checked = true;
}