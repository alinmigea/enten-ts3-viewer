<?php

/**
 * This script performs some login actions on server API's for server displays, which
 * are not externally integrated via div or iframe.
 *
 * @author marius.bippig
 */

// require libs and objects
require_once '../core/Config.class.php';
require_once '../core/ts3admin.class.php';
require_once '../core/ServerViewerException.class.php';


/**
 * TEAMSPEAK 3 SERVER
 */
$server = new ts3admin(Config::getInstance()->getServerIp(), Config::getInstance()->getServerQueryPort());

if(!($server instanceof ts3admin))
{
	throw new ServerViewerException(0, 'No instance of ts3admin.');
}

$result = $server->connect();

if(!$result)
{
	throw new ServerViewerException(ServerViewerException::TS_COULD_NOT_CONNECT);
}

$server->login(Config::getInstance()->getAdminUsername(), Config::getInstance()->getAdminPassword());

if(!$result)
{
	throw new ServerViewerException(ServerViewerException::TS_ADMIN_NOT_LOGGED_IN);
}

/**
 * FURTHER SERVER
 */