<?php
	/* Simple panel with Badge */
?>
<div class="col-md-6">
  <!-- Example Panel With Tool -->
  <div class="panel panel-bordered">
    <div class="panel-heading">
      <h3 class="panel-title">Badge Sample</h3>
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

        <div class="badge-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front black">
              <i class="fa fa-bell"></i>
              <h6>Bell To Bell</h6>
            </div>
            <div class="back red">
              <p> You skied bell to bell, nice work ! </p>
            </div>
          </div>
        </div> <!-- end badge -->

        <div class="badge-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front black">
              <i class="fa fa-credit-card"></i>
              <h6>1000 Club</h6>
            </div>
            <div class="back red">
              <p> You Spent $1,000 with us, lets spend some more! </p>
            </div>
          </div>
        </div> <!-- end badge -->

        <div class="badge-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front black">
              <i class="fa fa-comment"></i>
              <h6>Review Rockstar</h6>
            </div>
            <div class="back red">
              <p> You gave us a review on trip advisor. Thanks! </p>
            </div>
          </div>
        </div> <!-- end badge -->



      </div><!-- / end row -->
    </div><!-- / end panel-body -->
  </div>
</div>