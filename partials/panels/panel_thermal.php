<?php
	/* Sample Thermal Date panel
  -------------------------------

        ADD CLASS "ACTIVE" TO ANY ON MOUNTAIN DAY
        ADD CLASS "ONE", "TWO", OR "THREE" FOR DAYS IN ROW
        ADD CLASS "STREAK" FOR ANY DAYS IN A ROW GREATER THEN THREE
  */
?>
<div class="col-md-6">
  <div class="panel panel-bordered">

    <div class="panel-heading">
      <h3 class="panel-title">On Mountain Heat Map</h3>
    </div>

    <div class="panel-body">
      <div class="row">

        <div id="thermal-map" class="col-xs-12">

          <?php

          while ( $j <= 4) { ?>
            <h6>
               <?php
                switch ($j) {
                   case 0:
                         echo "Nov";
                         break;
                   case 1:
                         echo "Dec";
                         break;
                   case 2:
                         echo "Jan";
                         break;
                   case 3:
                         echo "Feb";
                         break;
                   case 4:
                         echo "Mar";
                         break;
                } ?>
            </h6>
            <?php  while ( $i <= 30) { ?>
                <div class="thermal-day
               <?php
                switch ($i) {
                   case 4:
                         echo "active one";
                         break;
                   case 5:
                         echo "active two";
                         break;
                   case 6:
                         echo "active three";
                         break;
                   case 7:
                         echo "active streak";
                         break;
                   case 8:
                         echo "active streak";
                         break;
                } ?>">
                  <?php
                    $i++;
                    echo $i;
                  ?>
                </div>
            <?php  } ?>
          <?php $i = 0; $j++; } ?>

        </div> <!-- / end thermal-map -->

      </div><!-- / end row -->
    </div><!-- / end panel-body -->

  </div>
</div>