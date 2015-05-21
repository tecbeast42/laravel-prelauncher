<?php

return [
	'collect_usernames' => true,
	'username_validation_rules' => 'between:4,20', //Laravel filter string unique is will be appended
	'use_google_recaptcha' => true,
	'prelaunch_site_title' => 'Easy Laravel Prelauncher',
	'google_reCaptcha_html' => '', //Paste the div for google reCaptcha here
	'google_reCaptcha_verfiy_url' => 'https://www.google.com/recaptcha/api/siteverify',
];