<?php

/**
 * @author desentyer
 * @class TsConfig
 */
class TsConfig
{
	/**
	 * @var TsConfig $instance
	 */
	private static $instance = null;

	/**
	 * @var string $serverIp
	 */
	private $serverIp = '';

	/**
	 * @var integer $serverPort
	 */
	private $serverPort = '';

	/**
	 * @var string $serverQueryPort
	 */
	private $serverQueryPort = '';

	/**
	 * @var string $adminUsername
	 */
	private $adminUsername = '';

	/**
	 * @var string $adminPassword
	 */
	private $adminPassword = '';


	public function __construct()
	{
		if(!file_exists('../config.php'))
		{
			throw new ServerViewerException(3);
		}

		include '../config.php';

		if(array_key_exists('teamspeak', $config))
		{
			$this->serverIp = 		 $config['teamspeak']['serverIp'];
			$this->serverPort = 	 $config['teamspeak']['serverPort'];
			$this->serverQueryPort = $config['teamspeak']['serverQueryPort'];
			$this->adminUsername = 	 $config['teamspeak']['adminUsername'];
			$this->adminPassword = 	 $config['teamspeak']['adminPassword'];
		}
	}

	/**
	 * @return TsConfig
	 */
	public static function getInstance():TsConfig
	{
		if(is_null(self::$instance))
		{
			self::$instance = new TsConfig();
		}

		return self::$instance;
	}

	/**
	 * @return string
	 */
	public function getServerIp(): string
	{
		return $this->serverIp;
	}

	/**
	 * @return int
	 */
	public function getServerPort(): int
	{
		return $this->serverPort;
	}

	/**
	 * @return string
	 */
	public function getServerQueryPort(): string
	{
		return $this->serverQueryPort;
	}

	/**
	 * @return string
	 */
	public function getAdminUsername(): string
	{
		return $this->adminUsername;
	}

	/**
	 * @return string
	 */
	public function getAdminPassword(): string
	{
		return $this->adminPassword;
	}

}
