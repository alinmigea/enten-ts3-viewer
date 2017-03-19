<?php

require_once 'core/HandleMessageBox.class.php';

/*
 * @author desentyer
 *
 * This is the main module which has to be at the first point of all code.
 * It starts the client and calls all user data. Use the variable $server to your modules.
 */

try
{
	$message = [];
	include_once 'RunClient.php';
}
catch(Exception $exception)
{
	$message = HandleMessageBox::getPredefinedMessage($exception);
}