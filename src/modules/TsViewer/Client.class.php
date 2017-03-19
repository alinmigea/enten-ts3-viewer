<?php

require_once 'core/ServerViewerException.class.php';

/**
 * @class Client
 *
 * @author marius.bippig
 */
class Client
{
	/**
	 * Expand this list, if you wish to configure
	 * multiple CSS classes for a client.
	 *
	 * @var array
	 */
	private $additionalStyleClasses = [
		'user'
	];

	/**
	 * @var integer
	 */
	private $id = null;

	/**
	 * @var string $name
	 */
	private $name = null;

	/**
	 * @var array $iconList
	 */
	private $iconList = [];

	/**
	 * Client constructor.
	 *
	 * @param integer $id
	 * @param string $name
	 * @param array $iconList
	 * @throws ServerViewerException
	 */
	public function __construct($id, $name, array $iconList = [])
	{
		if(!strlen($name))
		{
			throw new ServerViewerException('The param $name has no length.');
		}

		if($id <= 0)
		{
			throw new ServerViewerException('The param $id is invalid: '.var_dump($id));
		}

		$this->id = $id;
		$this->name = $name;
		$this->iconList = $iconList;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @return array
	 */
	public function getIconList(): array
	{
		return $this->iconList;
	}

	/**
	 * @return array
	 */
	public function getAdditionalStyleClasses(): array
	{
		return $this->additionalStyleClasses;
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}


}