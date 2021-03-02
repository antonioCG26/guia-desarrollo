

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable
  ([['date', 'Y', {'type': 'string', 'role': 'tooltip', 'p': {'html': true}}],
    ['ENE', 2, createCustomHTMLContent('comunicacion personal 1','enero 12','assets/img/Card2Icon1.png','MALTA')],
    ['FEB', 1, createCustomHTMLContent('comunicacion personal 2','febrero 14','assets/img/Card2Icon2.png','LUPULO')],
    ['MAR', 3, createCustomHTMLContent('comunicacion personal 3','marzo 21','assets/img/Card2Icon3.png','AGUA')],
    ['ABR', 3, createCustomHTMLContent('comunicacion personal 4','abril 13','assets/img/Card2Icon1.png','MALTA')],
    ['MAY', 2, createCustomHTMLContent('comunicacion personal 5','mayo 24','assets/img/Card2Icon4.png','FRASCO')],
    ['JUN', 1, createCustomHTMLContent('comunicacion personal 6','junio 2','assets/img/Card2Icon3.png','AGUA')],
    ['JUL', 3, createCustomHTMLContent('comunicacion personal 7','julio 29','assets/img/Card2Icon4.png','FRASCO')],
    ['AGO', 4, createCustomHTMLContent('comunicacion personalb 8','agosto 26','assets/img/Card2Icon3.png','AGUA')]
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

function createCustomHTMLContent(curso,fecha,imgIngrediente,ingrediente) {
    return '<div class=" p-2 coursediv" >'+
            '<p class="courseName my-0">'+curso+'</p>'+
            '<p class="courseDate my-0">'+fecha+'</p>'+
            '<div class="row ">'+
              '<div class="col-3"><img class="courseCert" src="assets/img/Card3Icon1.png"></div>'+
              '<div class="col-9 "><p class="py-2">Certificado Obtenido </p></div>'+
              '<div class="col-3"><img class="courseCert" src="'+imgIngrediente+'"></div>'+
              '<div class="col-9 "><p class="py-2">Ingredientes ganados<br>'+ingrediente+' </p></div>'+
            '</div>'+
           '</div>';
    }