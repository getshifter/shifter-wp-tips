<?php
/*
Plugin Name: Shifter tips
Plugin URI: https://getshifter.io
Description: Show tips or help content about Shifter in your wp-admin
Author: Shifter team
Version: 1.0
*/
if ( ! is_admin() ) return;
require_once('tips.php');
$Shifter_Tips = new Shifter_Tips();
$Shifter_Tips->initialize();