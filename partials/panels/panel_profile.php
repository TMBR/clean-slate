<?php
	/* Simple user profile with quick stats */
?>
<div id="user-profile" class="col-md-12">
  <!-- Example Panel With No Heading -->
  <div class="panel panel-bordered">

    <div class="panel-body">
      <div class="row">

        <div id="profile-image" class="col-md-3">
            <img src="/public/images/profile.jpg" alt="name" />
        </div>

        <div id="user-info" class="col-md-3">
          <h4>Travis Rice </h4>
          <p>@Trice </p>
          <p>Last Active : Apr-12, 2016 </p>
          <p>Goal Progress: 52 of 80 </p>
        </div>

        <div id="stats" class="col-md-6">
          <div class="row">

            <div class="col-md-4">
              <h6>Leaderboard</h6>
              <p class="number" id="leaderboard-count"><span class="timer" data-countto="231"> </span><i class="fa fa-caret-up increase"></i> </p>

              <h6>Badges</h6>
              <p class="number" id="badges"><span class="timer" data-countto="21"> </span></p>

            </div>

            <div class="col-md-4">
              <h6>Vertical</h6>
              <p class="number" id="vertical"><span class="timer" data-countto="23,121"> </span></p>

              <h6>Days</h6>
              <p class="number" id="badges"><span class="timer" data-countto="52"> </span></p>

            </div>

            <div class="col-md-4">
              <h6>Lifts</h6>
              <p class="number" id="leaderboard-count"><span class="timer" data-countto="11"> </span></p>

              <h6>Streak</h6>
              <p class="number" id="badges"><span class="timer" data-countto="4"> </span></p>

            </div>

          </div>
        </div><!-- / stats -->

      </div>
    </div><!-- / end panel-body -->

  </div>
</div>