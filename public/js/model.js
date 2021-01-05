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