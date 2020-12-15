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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

function loading() {
    var num = Math.floor(Math.random() * 5000) + 1000;
    modelViewer.animationName = "Running";
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

function serach() {
    var keyword = document.getElementById('keyword').value;
    var add = "http://localhost:8000/";
    switch (keyword) {
        case "login":
            location.href = add + keyword;
            break;
        case "welcome":
            location.href = add;
            break;
        default:
            document.getElementById('id02').style.display = 'block';
    }
}