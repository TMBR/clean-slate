<?php
	/* Simple panel with dropdown select for actions */
?>
<div class="col-md-6">
  <!-- Example Panel With Tool -->
  <div class="panel panel-bordered">
    <div class="panel-heading">
      <h3 class="panel-title">Quick Stats</h3>
    		<div class="panel-actions">
          <div class="dropdown">
            <a role="button" aria-expanded="false" href="#" data-toggle="dropdown" id="examplePanelDropdown" class="dropdown-toggle">Dropdown <span class="caret"></span></a>
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

        <div class="col-md-8" id="vertical">
          <h6> VERTICAL </h6>
          <p class="big-number" id="user-vertical"><span class="timer" data-countto="23152"> </span><i class="fa fa-caret-up increase"></i> </p>
        </div> <!-- / end vertical -->

        <div class="col-md-4" id="days">
          <h6> Days </h6>
          <p class="big-number" id="user-vertical"><span class="timer" data-countto="12"> </span><i class="fa fa-caret-down decrease"></i></p>
        </div> <!-- / end days -->

      </div><!-- / end row -->
    </div><!-- / end panel-body -->
  </div>
</div>