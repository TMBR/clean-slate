<?php
	/* Simple panel with charts */
?>


<div class="col-md-12">
  <!-- Example Panel With Tool -->
  <div class="panel panel-bordered">
    <div class="panel-heading">
      <h3 class="panel-title">Charts</h3>
    		<div class="panel-actions">
          <div class="dropdown">
            <a role="button" aria-expanded="false" href="#" data-toggle="dropdown" id="examplePanelDropdown" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></a>
            <ul role="menu" aria-labelledby="examplePanelDropdown" class="dropdown-menu bullet dropdown-menu-right">
              <li role="presentation"><a role="menuitem" href="javascript:void(0)"><i aria-hidden="true" class="icon wb-reply"></i> Reply</a></li>
              <li role="presentation"><a role="menuitem" href="javascript:void(0)"><i aria-hidden="true" class="icon wb-share"></i> Share</a></li>
              <li role="presentation"><a role="menuitem" href="javascript:void(0)"><i aria-hidden="true" class="icon wb-trash"></i> Delete</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" href="javascript:void(0)"><i aria-hidden="true" class="icon wb-settings"></i> Settings</a></li>
            </ul>
          </div>
        </div>
    </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-md-8">
          <div id="linelegend"></div>
          <canvas id="lineChart" width="800" height="300"></canvas>
        </div>

        <div class="col-md-4">
          <canvas id="doughnutChart" width="300" height="300"></canvas>
        </div>

        <div class="col-md-8">
          <canvas id="barChart" width="800" height="300"></canvas>
        </div>
      </div>
    </div><!-- / end panel-body -->

  </div>
</div>

<script type="text/javascript">



var data = {
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

var options = {
    ///Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines : true,

    //String - Colour of the grid lines
    scaleGridLineColor : "rgba(0,0,0,.05)",

    //Number - Width of the grid lines
    scaleGridLineWidth : 1,

    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,

    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,

    //Boolean - Whether the line is curved between points
    bezierCurve : false,

    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li style=\"background-color:<%=datasets[i].strokeColor%>\"><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

};

var ctx = document.getElementById("lineChart").getContext("2d");
var myLineChart = new Chart(ctx).Line(data, options);

var legend = document.getElementById("linelegend");
legend.innerHTML = myLineChart.generateLegend();

var ctx = document.getElementById("barChart").getContext("2d");
var myBarChart = new Chart(ctx).Bar(data, options);



var data = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    }
]

var ctx = document.getElementById("doughnutChart").getContext("2d");
var myDoughnutChart = new Chart(ctx).Doughnut(data);

</script>