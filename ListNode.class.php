<?php

class ListNode
{
	protected $next;		// Next node in the list
	protected $value;		// Value of the node
	
	// Constructor
	// Input: Value of the node
	public function __construct($value)
	{
		$this->value = $value;
	}
	
	public function __get($name)
	{
		return $this->$name;
	}
	
	public function __set($name, $value)
	{
		$this->$name = $value;
	}
	
	// Return the node as string
	public function toString()
	{
		return $this->value . "\n";
	}
}