// /* ----- Employee Dashboard Chart Js For Applications Statistics ----- */
// function createConfig() {
//     return {
//         type: 'line',
//         data: {
//             labels: ["January", "February", "March", "April", "May", "June", 'July', "Agust", "Sept", "Oct", "Nov", "Dec"],
//             datasets: [{
//                 label: 'Dataset',
//                 borderColor: window.chartColors.red,
//                 backgroundColor: window.chartColors.red,
//                 data: [148, 140, 210, 120, 160, 140, 190, 170, 135, 210, 180, 249],
//                 fill: false,
//             }]
//         },
//         options: {
//             responsive: true,
//             title: {
//                 display: true,
//                 text: 'Sample tooltip with border'
//             },
//             tooltips: {
//                 position: 'nearest',
//                 mode: 'index',
//                 intersect: false,
//                 yPadding: 10,
//                 xPadding: 10,
//                 caretSize: 8,
//                 backgroundColor: 'rgba(255, 255, 255, 1)',
//                 titleFontColor: window.chartColors.black,
//                 bodyFontColor: window.chartColors.black,
//                 borderColor: 'rgba(0,0,0,1)',
//                 borderWidth: 1
//             },
//         }
//     };
// }
window.onload = function() {
    var c_container = document.querySelector('.c_container');
    var div = document.createElement('div');
    div.classList.add('chart-container');

    var canvas = document.createElement('canvas');
    div.appendChild(canvas);
    c_container.appendChild(div);

    var ctx = canvas.getContext('2d');
    var config = createConfig();
    new Chart(ctx, config);
};
// Circle Doughnut Chart
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: [' Income 32%', 'Taxes 28%', 'Fees 40%'],
        datasets: [{
            label: 'My First dataset',
            segmentShowStroke : true,
            segmentStrokeColor : "E8EAED",
            datasetStrokeWidth : 24,
            backgroundColor: ["#5A6ACF", "#8593ED", "#C7CEFF"],
            data: [50, 25, 25],
            responsive: true,
            borderWidth: 6,
            showScale: true
        }]
    },

    // Configuration options go here
    options: {
        aspectRatio: 1,
        cutoutPercentage : 85,
        responsive: true,
         legend: {
            position: 'left'
         }
    }
});

// // BarChart Style
// var data = {
//   labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
//   datasets: [{
//     label: "Dataset #1",
//     backgroundColor: "rgba(255,99,132,0.2)",
//     borderColor: "rgba(255,99,132,1)",
//     borderWidth: 2,
//     hoverBackgroundColor: "rgba(255,99,132,0.4)",
//     hoverBorderColor: "rgba(255,99,132,1)",
//     data: [65, 59, 20, 81, 56, 55, 40],
//   }]
// };

// var options = {
//   maintainAspectRatio: false,
//   scales: {
//     yAxes: [{
//       stacked: true,
//       gridLines: {
//         display: true,
//         color: "rgba(255,99,132,0.2)"
//       }
//     }],
//     xAxes: [{
//       gridLines: {
//         display: false
//       }
//     }]
//   }
// };

// Chart.Bar('chart', {
//   options: options,
//   data: data
// });

// LineChart Style 2
var ctx = document.getElementById('myChartweave').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line', // also try bar or other graph types
    // The data for our dataset
    data: {
        labels: ["Jan", "Feb", "Marc", "April", "May", "June", "July", "Agust", "Sept", "Oct", "Nov", "Dec"],
        // Information about the dataset
        datasets: [{
            data: [148, 140, 210, 120, 160, 140, 190, 170, 135, 210, 180, 249],
            label: "Sale",
            backgroundColor: 'lightblue',
            borderColor: 'lightblue',
            responsive: true,
            maintainAspectRatio: false,
            fill: false,
            borderColor: '#336CFB',
            scaleFontSize: 13,
            scaleFontColor: "#4F547B",
            borderWidth: 2
        }]
    },
    // Configuration options
    options: {
        layout: {
          padding: 10,
        },
        legend: {
            position: 'bottom',
        },
        title: {
            display: true,
            // text: 'Precipitation in Toronto'
        },
        tooltips: {
            position: 'nearest',
            mode: 'index',
            intersect: false,
            yPadding: 15,
            xPadding: 10,
            caretSize: 8,
            backgroundColor: '#fff',
            titleFontColor: "#626974",
            bodyFontColor: "#041E42",
            shadowColor: 'rgba(4, 30, 66, 0.1)',
            borderColor: '#EAEAEA'
        },
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    // labelString: 'Precipitation in mm'
                },
                ticks: {
                    min: 0,
                    max: 300,
                    // forces step size to be 5 units
                    stepSize: 50
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    // labelString: 'Month of the Year'
                }
            }]
        }
    }
});

// Chart JS ALl Options
// Chart.defaults.global = {
//     // Boolean - Whether to animate the chart
//     animation: true,
//     animationSteps: 60, // Number - Number of animation steps
//     animationEasing: "easeOutQuart",
//     showScale: true,// Boolean - If we should show the scale at all
//     scaleOverride: false, // Boolean - If we want to override with a hard coded scale
//     // ** Required if scaleOverride is true **
//     scaleSteps: null,// Number - The number of steps in a hard coded scale
//     scaleStepWidth: null,// Number - The value jump in the hard coded scale
//     scaleStartValue: null,// Number - The scale starting value
//     scaleLineColor: "rgba(0,0,0,.1)",// String - Colour of the scale line
//     scaleLineWidth: 1, // Number - Pixel width of the scale line
//     scaleShowLabels: true,// Boolean - Whether to show labels on the scale
//     scaleLabel: "<%=value%>",// Interpolated JS string - can access value
//     scaleIntegersOnly: true,// Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
//     scaleBeginAtZero: false,// Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
//     scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",// String - Scale label font declaration for the scale label
//     scaleFontSize: 12,// Number - Scale label font size in pixels
//     scaleFontStyle: "normal",// String - Scale label font weight style
//     scaleFontColor: "#666",// String - Scale label font colour
//     responsive: true,// Boolean - whether or not the chart should be responsive and resize when the browser does.
//     maintainAspectRatio: true,// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
//     showTooltips: true,// Boolean - Determines whether to draw tooltips on the canvas or not
//     // Function - Determines whether to execute the customTooltips function instead of drawing the built in tooltips (See [Advanced - External Tooltips](#advanced-usage-custom-tooltips))
//     customTooltips: false,
//     tooltipEvents: ["mousemove", "touchstart", "touchmove"],// Array - Array of string names to attach tooltip events
//     tooltipFillColor: "rgba(0,0,0,0.8)",// String - Tooltip background colour
//     tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",// String - Tooltip label font declaration for the scale label
//     tooltipFontSize: 14,// Number - Tooltip label font size in pixels
//     tooltipFontStyle: "normal",// String - Tooltip font weight style
//     tooltipFontColor: "#fff",// String - Tooltip label font colour
//     tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",// String - Tooltip title font declaration for the scale label
//     tooltipTitleFontSize: 14,// Number - Tooltip title font size in pixels
//     tooltipTitleFontStyle: "bold",    // String - Tooltip title font weight style
//     tooltipTitleFontColor: "#fff",// String - Tooltip title font colour
//     tooltipYPadding: 6,// Number - pixel width of padding around tooltip text
//     tooltipXPadding: 6,// Number - pixel width of padding around tooltip text
//     tooltipCaretSize: 8,// Number - Size of the caret on the tooltip
//     tooltipCornerRadius: 6,// Number - Pixel radius of the tooltip border
//     tooltipXOffset: 10,// Number - Pixel offset from point x to tooltip edge
//     tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",// String - Template string for single tooltips
//     multiTooltipTemplate: "<%= value %>",// String - Template string for multiple tooltips
//     onAnimationProgress: function(){},// Function - Will fire on animation progression.
//     onAnimationComplete: function(){}// Function - Will fire on animation completion.
// };
// var data = {
//     labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
//     datasets: [
//         {
//             label: "My First dataset",
//             fillColor: "rgba(220,220,220,0.2)",
//             strokeColor: "rgba(220,220,220,1)",
//             pointColor: "rgba(220,220,220,1)",
//             pointStrokeColor: "#fff",
//             pointHighlightFill: "#fff",
//             pointHighlightStroke: "rgba(220,220,220,1)",
//             data: [2089, 2884, 1822,1855, 2096, 1686, 1805, 1405, 1564, 1230, 1258, 1266]
//         },
//         {
//             label: "My Second dataset",
//             fillColor: "rgba(151,187,205,0.2)",
//             strokeColor: "rgba(151,187,205,1)",
//             pointColor: "rgba(151,187,205,1)",
//             pointStrokeColor: "#fff",
//             pointHighlightFill: "#fff",
//             pointHighlightStroke: "rgba(151,187,205,1)",
//             data: [1913, 1604, 2111, 1643, 1463, 1574, 1357, 1538, 1538, 1564, 1561, 1632]
//         }
//     ]
// };
// var options = {

    
//     scaleShowGridLines : true,///Boolean - Whether grid lines are shown across the chart    
//     scaleGridLineColor : "rgba(0,0,0,.05)",//String - Colour of the grid lines    
//     scaleGridLineWidth : 1,//Number - Width of the grid lines    
//     scaleShowHorizontalLines: true,//Boolean - Whether to show horizontal lines (except X axis)    
//     scaleShowVerticalLines: true,//Boolean - Whether to show vertical lines (except Y axis)    
//     bezierCurve : false,//Boolean - Whether the line is curved between points
//     bezierCurveTension : 0.4,//Number - Tension of the bezier curve between points
//     pointDot : true,//Boolean - Whether to show a dot for each point
//     pointDotRadius : 4,//Number - Radius of each point dot in pixels
//     pointDotStrokeWidth : 1,//Number - Pixel width of point dot stroke
//     pointHitDetectionRadius : 20,    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
//     datasetStroke : true,//Boolean - Whether to show a stroke for datasets
//     datasetStrokeWidth : 2,//Number - Pixel width of dataset stroke    
//     datasetFill : true,//Boolean - Whether to fill the dataset with a colour
//     //String - A legend template
//     legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

// };;

// var ctx = document.getElementById("myChart").getContext("2d");
// var myLineChart = new Chart(ctx).Line(data, options);