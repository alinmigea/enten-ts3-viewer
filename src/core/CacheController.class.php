<?php


/**
 * @class Cache
 *
 * @author marius.bippig
 */
class CacheController
{
	const TS3 = 'ts3';

	/**
	 * @var CacheController
	 */
	public static $cacheController = null;

	public function __construct()
	{
	}

	/**
	 * @return CacheController
	 */
	public static function getInstance()
	{
		if(is_null(self::$cacheController))
		{
			self::$cacheController = new CacheController();
		}

		return self::$cacheController;
	}

	/**
	 * Caches a value by identifier.
	 *
	 * @param string $identifier
	 * @param mixed $value
	 * @param integer $timeToLife
	 */
	public function cache($identifier, $value, $timeToLife = 120)
	{
		if(!apc_exists($identifier))
		{
			apc_add($identifier, $value, $timeToLife);
		}

		apc_store($identifier, $value);
	}

	/**
	 * Returns cached data.
	 *
	 * @param $identifier
	 * @return string|null
	 */
	public function getCached($identifier)
	{
		if(apc_exists($identifier))
		{
			return apc_fetch($identifier);
		}
		else
		{
			return null;
		}
	}
}