
var chart    = document.getElementById('chart').getContext('2d'),
gradient = chart.createLinearGradient(1, 1, 1, 450);
gradient.addColorStop(0, '#f5af193a');
gradient.addColorStop(0.25, '#f5af192a');
gradient.addColorStop(0.50, '#f5af191a');
gradient.addColorStop(0.75, '#f127110a');
gradient.addColorStop(1, '#f127110a');


var data  = {
    fontFamily: "Alegreya Sans SC",
    labels: [ '2005', '2007', '2009', '2011', '2013', '2015','2017','2019'],
    datasets: [{
            label: 'Customer No ',
            fontSize: 25,
            backgroundColor: gradient,
            pointBackgroundColor: 'black',
            pointBorderColor: 'white',
            pointRadius: 12,
            pointHoverRadius: 14,
            borderWidth: 2.5,
            borderColor: '#f5af19',
            data: [20, 110, 205, 275, 355, 405, 498, 572]
    }]
};


var options = {
    fontFamily: "Alegreya Sans SC",
    responsive: true,
    maintainAspectRatio: true,
    animation: {
        easing: 'easeInOutQuad',
        duration: 1560
    },
    scales: {
        xAxes: [{
            gridLines: {
                color: '#f5af1900',
                lineWidth: 0.15
            }
        }],
        yAxes: [{
            gridLines: {
                color: '#f5af1900',
                lineWidth: 0.15
            }
        }]
    },
    elements: {
        line: {
            tension: 0
        }
    },
    legend: {
        display: false
    },
    point: {
        backgroundColor: 'white'
    },
    tooltips: {
        fontFamily: 'calibri',
        fontWeight: 'bold',
        backgroundColor: '#f5af19',
        titleFontColor: 'white',
        fontColor: 'white',
        fontSize: 25,
        caretSize: 20,
        cornerRadius: 10,
        xPadding: 15,
        yPadding: 15
    }
};


var chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
    options: options
});