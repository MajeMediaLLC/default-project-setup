<?php

/**
 * @description Takes any message and sends it to the error_log. Due to how php's serialize works (will add binary characters) and that error_log will truncate when it hits a binary character a str_replace is used.
 *
 * @param $message mixed anything you want to print out
 */
function _log( $message ) {

	error_log( str_replace( "\0", "[NULL]", print_r( $message, TRUE ) ) );

}