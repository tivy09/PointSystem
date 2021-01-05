function JanuaryPie() {
    document.getElementById("myDIV1").style.display = "block";
    document.getElementById("myDIV2").style.display = "none";
    document.getElementById("myDIV3").style.display = "none";
}

function FebruaryPie() {
    document.getElementById("myDIV1").style.display = "none";
    document.getElementById("myDIV2").style.display = "block";
    document.getElementById("myDIV3").style.display = "none";
}

function MarchPie() {
    document.getElementById("myDIV1").style.display = "none";
    document.getElementById("myDIV2").style.display = "none";
    document.getElementById("myDIV3").style.display = "block";
}

var PieChart1 = document.getElementById('piechart1');
var myChart = new Chart(PieChart1, {
    type: 'pie',
    data: {
        labels: ['Age at 11 to 20', 'Age at 21 to 30', 'Age at 31 to 40', 'Age at 41 to others'],
        datasets: [{
            data: [64.93, 24.95, 10.9, 8.22],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
        }]
    },
    options: {
        layout: {
            margin: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        title: {
            display: true,
            text: 'Contribution to orders of users of all Ages(%)'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
    }
});

var PieChart2 = document.getElementById('piechart2');
var myChart = new Chart(PieChart2, {
    type: 'pie',
    data: {
        labels: ['Age at 11 to 20', 'Age at 21 to 30', 'Age at 31 to 40', 'Age at 41 to others'],
        datasets: [{
            data: [39.93, 24.95, 16.9, 18.22],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
        }]
    },
    options: {
        layout: {
            margin: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        title: {
            display: true,
            text: 'Contribution to orders of users of all Ages(%)'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
    }
});

var PieChart3 = document.getElementById('piechart3');
var myChart = new Chart(PieChart3, {
    type: 'pie',
    data: {
        labels: ['Age at 11 to 20', 'Age at 21 to 30', 'Age at 31 to 40', 'Age at 41 to others'],
        datasets: [{
            data: [20.93, 44.95, 13.9, 11.22],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
        }]
    },
    options: {
        layout: {
            margin: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        title: {
            display: true,
            text: 'Contribution to orders of users of all Ages(%)'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
    }
});

var LineChart1 = document.getElementById('linchart1').getContext('2d');
var chart = new Chart(LineChart1, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Case/Sales',
            backgroundColor: 'rgb(255, 99, 745)',
            borderColor: 'rgb(0, 0, 0)',
            data: [180, 140, 500, 200, 500, 300, 350, 688, 636, 363, 298, 499]
        }]
    },

    // Configuration options go here
    options: {
        title: {
            display: true,
            text: 'Year for the Total Sales'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var LineChart2 = document.getElementById('linchart2').getContext('2d');
var chart = new Chart(LineChart2, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Case/Sales',
            backgroundColor: 'rgb(255, 99, 745)',
            borderColor: 'rgb(0, 0, 0)',
            data: [140, 900, 150, 200, 500, 300, 200, 250, 357, 749, 258, 486]
        }]
    },

    // Configuration options go here
    options: {
        title: {
            display: true,
            text: 'Year for the Total Sales'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var LineChart3 = document.getElementById('linchart3').getContext('2d');
var chart = new Chart(LineChart3, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Case/Sales',
            backgroundColor: 'rgb(255, 99, 745)',
            borderColor: 'rgb(0, 0, 0)',
            data: [120, 400, 500, 200, 150, 200, 100, 208, 654, 697, 481, 635]
        }]
    },

    // Configuration options go here
    options: {
        title: {
            display: true,
            text: 'Year for the Total Sales'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var barchart1 = document.getElementById('barchart1');
var myChart = new Chart(barchart1, {
    type: 'bar',
    data: {
        labels: ['Shoppe', 'Lazada', 'Amazon', 'Shop', 'TaoBao'],
        datasets: [{
            label: 'Case/Sales',
            data: [1756, 1243, 1000, 2100, 1472],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Contributed orders from Different  Channels'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var barchart2 = document.getElementById('barchart2');
var myChart = new Chart(barchart2, {
    type: 'bar',
    data: {
        labels: ['Shoppe', 'Lazada', 'Amazon', 'Shop', 'TaoBao'],
        datasets: [{
            label: 'Case/Sales',
            data: [1200, 1900, 1752, 1246, 2043],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Contributed orders from Different  Channels'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});

var barchart3 = document.getElementById('barchart3');
var myChart = new Chart(barchart3, {
    type: 'bar',
    data: {
        labels: ['Shoppe', 'Lazada', 'Amazon', 'Shop', 'TaoBao'],
        datasets: [{
            label: 'Cases/Sales',
            data: [2342, 1572, 1359, 2740, 1927, 1972],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Contributed orders from Different  Channels'
        },
        legend: {
            display: true,
            labels: {
                fontColor: 'rgb(0, 0, 0)'
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }]
        }
    }
});