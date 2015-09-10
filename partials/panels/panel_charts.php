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
          <canvas class="chart" id="lineChart" width="800" height="300"></canvas>
        </div>

        <div class="col-md-8">
          <canvas class="chart" id="barChart" width="800" height="300"></canvas>
        </div>
      </div>
    </div><!-- / end panel-body -->

  </div>
</div>