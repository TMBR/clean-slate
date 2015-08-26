<?php
	/* Simple panel with data loop */
?>
<div class="col-md-6">
  <!-- Example Panel With Tool -->
  <div class="panel panel-bordered">
    <div class="panel-heading">
      <h3 class="panel-title">Panel With Tool</h3>
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
    	<ul>
			<?php
			foreach($people as $person_name) {
				get_template('partials/overview/person.php', compact('person_name'));
			} ?>
		</ul>
    </div>
  </div>
  <!-- End Example Panel With Tool -->
</div>