<?php
class Product
{
	protected $id;
	protected $title;
	protected $name;
	protected $event_from_date;
	protected $event_to_date;
	protected $price;
	protected $image;
	protected $description1;
	protected $description2;
	protected $description3;

	function __construct($id, $title, $name, $event_from_date, $event_to_date, $price, $image, $description1, $description2, $description3)
	{
		$this->id = $id;
		$this->name = $name;
		$this->title = $title;
		$this->event_from_date = $event_from_date;
		$this->event_to_date = $event_to_date;
		$this->price = $price;
		$this->image = $image;
		$this->description1 = $description1;
		$this->description2 = $description2;
		$this->description3 = $description3;
	}

	function getId()
	{
		return $this->id;
	}

	function getName()
	{
		return $this->name;
	}
	function getTittle()
	{
		return $this->title;
	}
	function getEventFromDate()
	{
		return $this->event_from_date;
	}
	function getEventToDate()
	{
		return $this->event_to_date;
	}
	function getPrice()
	{
		return $this->price;
	}
	function getImage()
	{
		return $this->image;
	}
	function getDescription1()
	{
		return $this->description1;
	}
	function getDescription2()
	{
		return $this->description2;
	}
	function getDescription3()
	{
		return $this->description3;
	}
}
