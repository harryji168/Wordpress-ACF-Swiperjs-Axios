<?php
/*
  Plugin Name: 42 North Applicant Test
  description: Define custom post
  Version: 1.0
  author: 42 North
  author uri: https://42north.ca
  */

namespace FTNorth;
// Basic security.
defined( 'ABSPATH' ) or die( 'Unauthorized Access' );

require 'lib/class.ArtProjectsPostType.php';

// Instantiate/invoke the ArtProjectsPostType class object
load_plugin_textdomain('Art Project', false, dirname(plugin_basename(__FILE__))."/lang/");

$options = array(
  	'version'	=> '1.0.0',
  	'name'	=> 'Art Project',
  	'url'		=> plugin_dir_url( __FILE__ ),
  	'path'		=> plugin_dir_path( __FILE__ )
);

$art_project = new ArtProjectsPostType($options);

// if ACF, call method to define subpage
if (!class_exists('ACF')) {
  $art_project->acf_add_options_sub_page();

}