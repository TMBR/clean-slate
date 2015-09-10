(function($){
  $(function(){
    var linearChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Verical",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Days On Mountain",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };

    var linearChartOptions = {
      responsive: true,

      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,

      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,

      //Boolean - Whether the line is curved between points
      bezierCurve : false,

      legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li style=\"background-color:<%=datasets[i].strokeColor%>\"><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

    };

    var lineChartElem = document.getElementById("lineChart").getContext("2d");
    var myLineChart = new Chart(lineChartElem).Line(linearChartData, linearChartOptions);

    var barChartElem = document.getElementById("barChart").getContext("2d");
    var myBarChart = new Chart(barChartElem).Bar(linearChartData, linearChartOptions);

    var legendElem = document.getElementById("linelegend");
    legendElem.innerHTML = myLineChart.generateLegend();


    var doughnutData = [
      {
        value: 80,
        color:"#bf2c37",
        highlight: "#c82430",
        label: "Open Goals"
      },
      {
        value: 20,
        color: "#bbe300",
        highlight: "#c5ee06",
        label: "Complete"
      }
    ]

    var doughnutChartOptions = {
      responsive: true,
      percentageInnerCutout : 80
    };

    var doughnutChartElem = document.getElementById("doughnutChart").getContext("2d");
    var myDoughnutChart = new Chart(doughnutChartElem).Doughnut(doughnutData, doughnutChartOptions);
  })
})(jQuery);