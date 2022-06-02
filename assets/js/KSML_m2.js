var chart    = document.getElementById('chart').getContext('2d'),
gradient = chart.createLinearGradient(1, 1, 1, 450);
gradient.addColorStop(0, '#f5af1999');
gradient.addColorStop(0.25, '#f5af1989');
gradient.addColorStop(0.50, '#f5af1979');
gradient.addColorStop(0.75, '#f127110a');
gradient.addColorStop(1, '#f127110a');
var data  = {
    fontFamily: "Alegreya Sans SC",
    labels: [ '2013','2014', '2015', '2016', '2017'],
    datasets: [{
            label: 'USD $ ',
            backgroundColor: gradient,
            pointBackgroundColor: 'black',
            pointBorderColor: 'white',
            pointRadius: 10,
            pointHoverRadius: 12,
            borderWidth: 3.5,
            borderColor: 'white',
            data: [10926081, 11224867, 11402599, 14090834, 12944598]
    }]
};


var options = {
    fontFamily: "Alegreya Sans SC",
    responsive: true,
    maintainAspectRatio: true,
    animation: {
    easing: 'easeInOutQuad',
    duration: 520
},
scales: {
xAxes: [{
    gridLines: {
        color: 'rgba(253, 253, 253, 0)',
        lineWidth: 0.15
    }
}],
yAxes: [{
    gridLines: {
        color: 'rgba(253, 253, 253, 0)',
        lineWidth: 0.15
    }
}]
},
elements: {
line: {
    tension: 0.1
}
},
legend: {
display: false
},
point: {
backgroundColor: 'white'
},
tooltips: {
    fontFamily: "Alegreya Sans SC",
    backgroundImage: '#000000ca',
    titleFontColor: '#cc9f36',
    caretSize: 20,
    cornerRadius: 5,
    xPadding: 10,
    yPadding: 10
}
};
var chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
    options: options
});