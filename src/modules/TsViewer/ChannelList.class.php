<?php

require_once 'modules/TsViewer/Channel.class.php';

/**
 * @class ChannelList
 *
 * @author Desentyer
 */
class ChannelList
{
	/**
	 * @var ChannelList
	 */
	private static $instance = null;

	/**
	 * @var array
	 */
	private $channelList = [];

	public function __construct()
	{
	}

	/**
	 * @param ChannelList $channelList
	 * @return ChannelList
	 */
	public static function getInstance(ChannelList $channelList = null):ChannelList
	{
		if(!is_null($channelList))
		{
			self::$instance = $channelList;
		}
		elseif(is_null(self::$instance))
		{
			self::$instance = new ChannelList();
		}

		return self::$instance;
	}

	/**
	 * @param Channel $channel
	 */
	public function addChannel(Channel $channel)
	{
		$this->channelList[] = $channel;
	}

	/**
	 * @return array
	 */
	public function getChannelList()
	{
		return $this->channelList;
	}
}