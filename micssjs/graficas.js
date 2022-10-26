
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
var $A=5;
var $B=2
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['AVANZADO', $A],
    ['NO AVANZADO', $B],

  ]);

  var options = {
    title: 'AVANCE DE LA MATERIA'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
