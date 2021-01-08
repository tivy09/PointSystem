function OpenWindow(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function fileValidation() {
    var fileInput = document.getElementById('Email_file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
        imagePreview.style.display = "none";
    } else {
        //Image preview
        imagePreview.style.display = "block";
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result + '" width="51px" height="70px"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}

function checkError() {
    var form_email = document.getElementById('form_email').value;
    var to_email = document.getElementById('to_email').value;
    var Email_title = document.getElementById('Email_title').value;
    var Email_msg = document.getElementById('Email_MSG').value;

    if (form_email == to_email) {
        alert("You cannot send it to yourself.");
        return false;
    } else if (Email_title == "") {
        alert("Please Write The Email Title");
        return false;
    } else if (Email_msg == "") {
        alert("Please Write The Email Cannot Empty la");
        return false;
    }
}

function searchEmail() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("div");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}