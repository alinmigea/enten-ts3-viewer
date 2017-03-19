<?php

require_once 'modules/TsViewer/SubChannel.class.php';
require_once 'core/ServerViewerException.class.php';
require_once 'modules/TsViewer/Icon.class.php';

/**
 * @class Channel
 *
 * @author marius.bippig
 */
class Channel
{
	/**
	 * Expand this list, if you wish to configure
	 * multiple CSS classes for a channel.
	 *
	 * @var array
	 */
	private $additionalStyleClasses = [
		'channel'
	];

	/**
	 * @var array
	 */
	private $subChannelList = [];

	/**
	 * @var array $clientList
	 */
	private $clientList = [];

	/**
	 * @var string
	 */
	private $name = '';

	/**
	 * @var Icon
	 */
	private $icon = null;

	/**
	 * Channel constructor.
	 *
	 * @param string $name
	 * @param Icon $iconId
	 * @throws ServerViewerException
	 */
	public function __construct($name, $iconId = null)
	{
		if(!strlen($name))
		{
			throw new ServerViewerException(__METHOD__.'The parameter name is without length.');
		}

		$this->name = $name;
		$this->icon = $iconId;
	}

	/**
	 * Returns predefined additional CSS classes.
	 *
	 * @return array
	 */
	public function getAdditionalStyleClasses(): array
	{
		return $this->additionalStyleClasses;
	}

	/**
	 * Adds additional sub channels to channel.
	 *
	 * @param SubChannel $subChannel
	 */
	public function addSubChannel(SubChannel $subChannel)
	{
		$this->subChannelList[] = $subChannel;
	}

	/**
	 * @return array
	 */
	public function getSubChannels()
	{
		return $this->subChannelList;
	}

	/**
	 * @return array
	 */
	public function getClientList(): array
	{
		return $this->clientList;
	}

	/**
	 * @param array $clientList
	 */
	public function setClientList(array $clientList)
	{
		$this->clientList = $clientList;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @return Icon
	 */
	public function getIcon(): Icon
	{
		return $this->icon;
	}


}