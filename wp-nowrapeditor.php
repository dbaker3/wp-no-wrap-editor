<?php
/*
Plugin Name: No-Wrap Editor
Plugin URI: https://github.com/dbaker3/wpnowrapeditor/
Description: Turns off word wrapping in text editor
Version: 1.0
Author: David Baker - Milligan College
Author URI: https://github.com/dbaker3/
*/

add_action( 'edit_form_after_title', 'add_no_wrap_editor_style' );
function add_no_wrap_editor_style() {
  echo '<style>textarea.wp-editor-area {white-space: pre; word-wrap: normal; overflow-x: scroll;}</style>';
}