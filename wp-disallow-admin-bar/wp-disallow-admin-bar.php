<?php
/*
Plugin Name:  Disallow Admin Bar
Plugin URI:   https://github.com/thinknathan/
Description:  Disallow admin bar.
Version:      1.0.0
Author:       Think_Nathan
Author URI:   https://thinknathan.ca/
License:      MIT License
*/

add_action('show_admin_bar', '__return_false');
