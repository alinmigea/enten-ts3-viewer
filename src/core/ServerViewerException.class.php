<?php

require_once 'HandleMessageBox.class.php';

/**
 * @class ServerViewerException
 *
 * @author marius.bippig
 */
class ServerViewerException extends Exception
{
	/**
	 * General codes
	 */
	const CONFIGURATION_DATA_NOT_LOADED = 3;

	/**
	 * Teamspeak Codes
	 */
	const TS_COULD_NOT_CONNECT 		= 1;
	const TS_ADMIN_NOT_LOGGED_IN 	= 2;

	public function __construct($code, $message = '', Exception $previous = null)
	{
		if(!strlen($message))
		{
			$message = HandleMessageBox::getPredefinedMessage($code);
		}

		parent::__construct($message, $code, $previous);
	}
}