var chartData = [{
    "year": 1996,
        "motorcycles": 1496

    }, {
    "year": 2000,
        "bicycles": 3296
    }, {
    "year": 2005,
        "bicycles": 7256
    }, {
    "year": 2009,
        "bicycles": 8421
    }, {
    "year": 2012,
        "bicycles": 11076
    }, {
    "year": 2014,
        "bicycles": 11785
    }, {
    "year": 2015,
        "bicycles": 12655
    }, {
    "year": 2016,
        "bicycles": 13345
    }, {
    "year": 2017,
        "bicycles": 14215
    }, {
    "year": 2018,
        "bicycles": 15755
    }, {
    "year": 2019,
        "bicycles": 17350
    }
];

var chart =  AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "fontFamily": "Alegreya Sans SC",
    "fontSize": '15',
    "autoMargins": true,
    "addClassNames": true,
    "zoomOutText": "",
    "defs": {
        "filter": [
            {
                "x": "-50%",
                "y": "-50%",
                "width": "200%",
                "height": "200%",
                "id": "blur",
                "feGaussianBlur": {
                    "in": "SourceGraphic",
                    "stdDeviation": "50"
                }
            },
            {
                "id": "shadow",
                "width": "150%",
                "height": "150%",
                "feOffset": {
                    "result": "offOut",
                    "in": "SourceAlpha",
                    "dx": "2",
                    "dy": "2"
                },
                "feGaussianBlur": {
                    "result": "blurOut",
                    "in": "offOut",
                    "stdDeviation": "10"
                },
                "feColorMatrix": {
                    "result": "blurOut",
                    "type": "matrix",
                    "values": "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                "feBlend": {
                    "in": "SourceGraphic",
                    "in2": "blurOut",
                    "mode": "normal"
                }
            }
        ]
    },
    "fontSize": 10,
    "dataProvider": chartData,
    "dataDateFormat": "YYYY",
    "categoryField": "year",
    "categoryAxis": {
        "gridAlpha": 0,
        "axisColor": "#ffb404",
        "color": "#ffffff00",
        "startOnAxis": true,
        "tickLength": 0,
        "parseDates": false,
        "minPeriod": "YYYY"
    },
    "valueAxes": [
        {
            "fontSize": 0,
            "ignoreAxisWidth":true,
            "stackType": "regular",
            "gridAlpha": 0,
            "axisAlpha": 0,
            "color": "#ffffff00",
            "inside": true
        }
    ],
    "graphs": [
        {
            "id": "g1",
            "type": "line",
            "title": "Cars",
            "valueField": "cars",
            "fillColors": [
                "#ffb404",
                "black",
            ],
            "lineAlpha": 0,
            "fillAlphas": 0.8,
            "showBalloon": false
        },
        {
            "id": "g3",
            "title": "Bicycles",
            "valueField": "bicycles",
            "lineAlpha": 5,
            "lineColor": "#ffb404",
            "bullet": "square",
            "dashLength": 10,
            "bulletBorderAlpha": 1,
            "bulletAlpha": 1,
            "bulletSize": 10,
            "stackable": true,
            "bulletColor": "#cc9f36",
            "bulletBorderColor": "#ffffff",
            "bulletBorderThickness": 5,
            "balloonText": "<h2 id='ballonText'>[[value]] Tons</h2>"
        }
    ],
    "chartCursor": {
        "cursorAlpha": 5,
        "zoomable": true,        
        "fontSize": 15,
        "fontFamily": 'Alegreya Sans SC',
        "color": "#ffb404",
        "cursorColor": "#ffb404",
        "categoryBalloonColor": "black",
        "fullWidth": true,
        "categoryBalloonDateFormat": "YYYY",
        "balloonPointerOrientation": "vertical"
    },
    "balloon": {
        "fontFamily": 'Alegreya Sans SC',
        "borderAlpha": 100,
        "borderColor": "black",
        "fillAlpha": 100,
        "fillColor": "#000000ab",
        "shadowAlpha": 100,
        "offsetX": 40,
        "offsetY": -50
    }
});
