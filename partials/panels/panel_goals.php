<?php
	/* Sample goals Panel with info */
?>
<div id="goal-panel" class="col-md-6">
  <div class="panel panel-bordered">

    <div class="panel-heading">
      <h3 class="panel-title">Goal Progress</h3>
    </div>

    <div class="panel-body">
      <div class="row">

      	<div class="chart-split doughnut">
        	<canvas class="chart" id="doughnutChart" width="100" height="100"></canvas>
    	    <p class="big-number"><span class="timer" data-countto="20"> </span></p>
    	</div>

    	<div class="goal-stats">
    	      <h6>Goal</h6>
              <p class="number"><span class="timer" data-countto="31"> </span></p>

              <h6>Streak</h6>
              <p class="number"><span class="timer" data-countto="21"> </span></p>

              <h6>Pace</h6>
              <p class="number"><span class="timer" data-countto="21"> </span></p>
    	</div>

      </div><!-- / end row -->
    </div><!-- / end panel-body -->

  </div>
</div><!-- / end goal panel -->


