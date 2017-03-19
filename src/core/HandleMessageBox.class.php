<?php

/**
 * @class HandleMessageBox
 *
 * @author marius.bippig
 */
class HandleMessageBox
{
	const DISPLAY_TYPE_ERROR 	= 'error';
	const DISPLAY_TYPE_INFO 	= 'info';

	/**
	 * Converts the exception code into a readable message.
	 *
	 * @param Exception $exception
	 * @return array
	 */
	public static function getPredefinedMessage(Exception $exception):array
	{
		switch($exception->getCode())
		{
			case 0:
			default:
				return [
					'type'	  => self::DISPLAY_TYPE_ERROR,
					'message' => $exception->getMessage()
				];

			case 1:
				return [
					'type'	  => self::DISPLAY_TYPE_ERROR,
					'message' => 'Verbindung zum Server konnte nicht hergestellt werden.'
				];
			case 2:
				return [
					'type'	  => self::DISPLAY_TYPE_ERROR,
					'message' => 'Login am Server fehlgeschlagen. Benutzerdaten korrekt?'
				];

			case 3:
				return [
					'type'	  => self::DISPLAY_TYPE_ERROR,
					'message' => 'Konfigurationsdaten konnten nicht geladen werden.'
				];


		}
	}

	/**
	 * Displays a message and returns the appropriate container.
	 *
	 * @param array $message
	 * @return string
	 */
	public static function display($message)
	{
		if(array_key_exists('type', $message) && array_key_exists('message', $message))
		{
			switch($message['type'])
			{
				case self::DISPLAY_TYPE_ERROR:
					return '<div class="error">'.$message['message'].'</div>';

				case self::DISPLAY_TYPE_INFO:
					return '<div class="warning">'.$message['message'].'</div>';
			}
		}

		return '';
	}
}