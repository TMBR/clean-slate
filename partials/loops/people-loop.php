<?php
foreach($people as $person_name) {
	get_template('partials/overview/person.php', compact('person_name'));
}
