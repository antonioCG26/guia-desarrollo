

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable
  ([['X', 'Y', {'type': 'string', 'role': 'tooltip', 'p': {'html': true}}],
    ['JAN', 3, createCustomHTMLContent('hola mi nombre es antonio amigo')],
    ['FEB', 2.5, createCustomHTMLContent('hola amigo')],
    ['MAR', 3, createCustomHTMLContent('hola amigo')],
    ['APR', 4, createCustomHTMLContent('hola amigo')],
    ['MAY', 4, createCustomHTMLContent('hola amigo')],
    ['JUN', 3, createCustomHTMLContent('hola amigo')],
    ['JUL', 2.5, createCustomHTMLContent('hola amigo')],
    ['AGO', 3, createCustomHTMLContent('hola amigo')]
]);
  var options = {
    curveType: 'function',
    colors: ['#7f00ff'],
    legend: 'none',
    pointSize: 20,
    backgroundColor: "transparent",
    vAxis: { 
      textPosition: 'none',
      gridlines: {
          color: 'transparent'
      } 
  },
  hAxis: { 
      textStyle:{color: '#FFF'},
      gridlines: {
          color: 'transparent'
      } 
  },
  tooltip: { isHtml: true },    // CSS styling affects only HTML tooltips.

  
  };

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(data, options);
}

function createCustomHTMLContent(hola2) {
    return '<div>'+hola2+'</div>';
    }