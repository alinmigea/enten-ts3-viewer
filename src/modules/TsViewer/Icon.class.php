<?php


/**
 * @class Icon
 *
 * @author desentyer
 */
class Icon
{
	/**
	 * @var integer
	 */
	private $serverGroupId = null;

	/**
	 * @var string
	 */
	private $name = '';

	/**
	 * @var resource
	 */
	private $binaryData = null;

	public function __construct($serverGroupId, $name, $binaryData)
	{
		$this->serverGroupId = $serverGroupId;
		$this->name = $name;
		$this->binaryData = $binaryData;
	}

	/**
	 * @return int
	 */
	public function getServerGroupId(): int
	{
		return $this->serverGroupId;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @return resource
	 */
	public function getBinaryData(): resource
	{
		return $this->binaryData;
	}


}