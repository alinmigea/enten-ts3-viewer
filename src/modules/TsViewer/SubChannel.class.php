<?php

require_once 'core/ServerViewerException.class.php';

/**
 * @class SubChannel
 *
 * @author desentyer
 */
class SubChannel
{
	/**
	 * Expand this list, if you wish to configure
	 * multiple CSS classes for a sub-channel.
	 *
	 * @var array
	 */
	private $additionalStyleClasses = [
		'subchannel'
	];

	/**
	 * @var string
	 */
	private $name = null;

	/**
	 * @var Icon $icon
	 */
	private $icon = null;

	/**
	 * @var array $clientList
	 */
	private $clientList = [];

	/**
	 * SubChannel constructor.
	 *
	 * @param string $name
	 * @param Icon $icon
	 * @throws ServerViewerException
	 */
	public function __construct($name, $icon = null)
	{
		if(strlen($name) <= 0)
		{
			throw new ServerViewerException('The parameter $name has no length.');
		}

		$this->name = $name;
		$this->icon = $icon;
	}


	/**
	 * @return array
	 */
	public function getAdditionalStyleClasses(): array
	{
		return $this->additionalStyleClasses;
	}

	/**
	 * @param array $additionalStyleClasses
	 */
	public function setAdditionalStyleClasses(array $additionalStyleClasses)
	{
		$this->additionalStyleClasses = $additionalStyleClasses;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name)
	{
		$this->name = $name;
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
	 * @return Icon
	 */
	public function getIcon(): Icon
	{
		return $this->icon;
	}


}