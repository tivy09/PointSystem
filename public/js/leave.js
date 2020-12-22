function myFunction() {
    var start = document.getElementById('start_date').value;
    var end = document.getElementById('end_date').value;
    var date1, date2;
    date1 = new Date(start);
    date2 = new Date(end);

    var time_difference = date2.getTime() - date1.getTime();

    var days_difference = time_difference / (1000 * 60 * 60 * 24);
    if (days_difference <= 0) {
        alert("cannot select a date that has passed。");
    } else {
        document.getElementById("days").value = days_difference;
    }

}

function submitForm() {
    document.getElementById('myformQQ').submit();
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}