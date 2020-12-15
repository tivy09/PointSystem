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