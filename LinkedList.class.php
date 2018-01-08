<?php

require('ListNode.class.php');

class LinkedList
{
	protected $first;			// First node of the list
	protected $count;
	
	// Constructor
	// Input: Array of values (Optional)
	public function __construct($values = array())
	{
		$this->first = NULL;
		$this->count = 0;
		
		foreach ($values as $value) {
			$this->add($value);
		}

		
	}
	
	// Add a node at the beginning of the list
	public function add($value)
	{
		$newNode = new ListNode($value);
		if ( $this->first !== NULL ) {
			$newNode->next = $this->first;
		}
		
		$this->first = &$newNode;
		$this->count++;
	}
	
	// Add a node at the specified index
	public function addAtIndex($value, $index)
	{
		if($this->sizeof() + 1  < $index) throw new Exception("index out of range");

		$newNode = new ListNode($value);
		if ( $this->first !== NULL ) {
			$previous = NULL;
			$current = $this->first;
			$count = 0;
			while ( $current !== NULL ) {
				if ( $count === $index ) {
					$newNode->next = $current;
					$previous->next = $newNode;
					$this->count++;
					break;
				}
				$previous = $current;
				$current = $current->next;
				$count++;
			}
		}
	}
	
	// Remove a node at the end of the list
	public function remove()
	{
		$this->removeAtIndex($this->sizeof() - 1);
	}
	
	// Remove a node at the specified index
	public function removeAtIndex($index)
	{
		if($this->sizeof() < $index) throw new Exception("index out of range");

		if ( $this->first !== NULL ) {
			$previous = NULL;
			$current = $this->first;
			$count = 0;
			while ( $current !== NULL ) {
				if ( $count === $index ) {
					if ( $previous === NULL ) {
						$this->first = $current->next;
					} else {
						$previous->next = $current->next;
					}
					$this->count--;
					return;
				}
				$previous = $current;
				$current = $current->next;
				$count++;
			}
		}
	}
	
	// Return the value of the first node
	public function getNode()
	{
		return $this->getNodeAtIndex(0);
	}
	
	// Return the value of the node at the specified index
	public function getNodeAtIndex($index)
	{
		if($this->sizeof() < $index) throw new Exception("index out of range");

		if ( $this->first !== NULL ) {
			$current = $this->first;
			for ( $i = 0; $i < $index; $i++ ) {
				$current = $current->next;
			}

			return $current->value;
		}
	}
	
	// Return the number of nodes
	public function sizeOf()
	{
		return $this->count;
	}
	
	// Return the list as string
	public function toString()
	{
		$list = "";
		$node = $this->first;
		
		while ($node != null) {
			$list .= $node->toString();
			$node = $node->next;
		}
		
		return $list;
	}
}