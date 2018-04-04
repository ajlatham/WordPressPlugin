<?php
/*
Plugin Name: plugin
Plugin URI:
Description: plugin for fun
Author: AJL
Author URI:
Version:

*/

add_action("admin_menu" , "addMenu");
function addMenu()
{
  add_menu_page("Example Options", "Example Options", 5, "example-options", "exampleMenu");
  add_submenu_page("example-options", "Option 1", "Option 1", 5, "example-option-1", "option 1");
}

function exampleMenu()
{
  echo <<< 'EOD'

  <h2>Hokage Naruto</h2>
  <p>

EOD;
}

function Option1()
{
  echo "Neji!";
}



























?>
