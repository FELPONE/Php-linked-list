<?php

require('LinkedList.class.php');

//============================================================================
// Test #1: Test the constructor with an empty list
do {
	$list = new LinkedList();
	if ($list->sizeOf() !== 0) {
		echo "Test #1: Test the constructor with an empty list -> FAILED\n";
		continue;
	}
	echo "Test #1: Test the constructor with an empty list -> PASS\n";
} while (0);

//============================================================================
// Test #2: Test the constructor with a non-empty list
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #2: Test the constructor with a non-empty list -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #2: Test the constructor with a non-empty list -> FAILED\n";
		continue;
	}
	echo "Test #2: Test the constructor with a non-empty list -> PASS\n";
} while (0);

//============================================================================
// Test #3: Test adding a node to an empty list
do {
	$list = new LinkedList();
	if ($list->sizeOf() !== 0) {
		echo "Test #3: Test the adding a node to an empty list -> FAILED\n";
		continue;
	}
	$list->add(5);
	if ($list->sizeOf() !== 1) {
		echo "Test #3: Test the adding a node to an empty list -> FAILED\n";
		continue;
	}
	if ($list->toString() != "5\n") {
		echo "Test #3: Test the adding a node to an empty list -> FAILED\n";
		continue;
	}
	echo "Test #3: Test the adding a node to an empty list -> PASS\n";
} while (0);

//============================================================================
// Test #4: Test adding a node to a non-empty list
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #4: Test adding a node to a non-empty list -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #4: Test adding a node to a non-empty list -> FAILED\n";
		continue;
	}
	$list->add(5);
	if ($list->sizeOf() !== 4) {
		echo "Test #4: Test adding a node to a non-empty list -> FAILED\n";
		continue;
	}
	if ($list->toString() != "5\n2\n8\n5\n") {
		echo "Test #4: Test adding a node to a non-empty list -> FAILED\n";
		continue;
	}
	echo "Test #4: Test adding a node to a non-empty list -> PASS\n";
} while (0);

//============================================================================
// Test #5: Test adding a node at a specified index
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #5: Test adding a node at a specified index -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #5: Test adding a node at a specified index -> FAILED\n";
		continue;
	}
	$list->addAtIndex(4, 2);
	if ($list->sizeOf() !== 4) {
		
		echo "Test #5: Test adding a node at a specified index -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n4\n5\n") {
		echo "Test #5: Test adding a node at a specified index -> FAILED\n";
		continue;
	}
	echo "Test #5: Test adding a node at a specified index -> PASS\n";
} while (0);

//============================================================================
// Test #6: Test adding a node at a specified index out of range
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #6: Test adding a node at a specified index out of range -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #6: Test adding a node at a specified index out of range -> FAILED\n";
		continue;
	}
	try {
		$list->addAtIndex(4, 5);
		echo "Test #6: Test adding a node at a specified index out of range -> FAILED\n";
		continue;
	} catch (Exception $e) {
	}
	echo "Test #6: Test adding a node at a specified index out of range -> PASS\n";
} while (0);

//============================================================================
// Test #7: Test removing a node
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #7: Test removing a node -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #7: Test removing a node -> FAILED\n";
		continue;
	}
	$list->remove();
	if ($list->sizeOf() !== 2) {
		echo "Test #7: Test removing a node -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n") {
		echo "Test #7: Test removing a node -> FAILED\n";
		continue;
	}
	echo "Test #7: Test removing a node -> PASS\n";
} while (0);

//============================================================================
// Test #8: Test removing a node at a specified index
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #8: Test removing a node at a specified index -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #8: Test removing a node at a specified index -> FAILED\n";
		continue;
	}
	$list->removeAtIndex(1);
	if ($list->sizeOf() !== 2) {
		echo "Test #8: Test removing a node at a specified index -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n5\n") {
		echo "Test #8: Test removing a node at a specified index -> FAILED\n";
		continue;
	}
	echo "Test #8: Test removing a node at a specified index -> PASS\n";
} while (0);

//============================================================================
// Test #9: Test removing a node at a specified index out of range
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #9: Test removing a node at a specified index out of range -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #9: Test removing a node at a specified index out of range -> FAILED\n";
		continue;
	}
	try {
		$list->removeAtIndex(5);
		echo "Test #9: Test removing a node at a specified index out of range -> FAILED\n";
		continue;
	} catch (Exception $e) {
	}
	echo "Test #9: Test removing a node at a specified index out of range -> PASS\n";
} while (0);

//============================================================================
// Test #10: Test getting a node
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #10: Test getting a node -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #10: Test getting a node -> FAILED\n";
		continue;
	}
	$value = $list->getNode();
	if ($value != 2) {
		echo "Test #10: Test getting a node -> FAILED\n";
		continue;
	}
	echo "Test #10: Test getting a node -> PASS\n";
} while (0);

//============================================================================
// Test #11: Test getting a node at a specified index
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #11: Test getting a node at a specified index -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #11: Test getting a node at a specified index -> FAILED\n";
		continue;
	}
	$value = $list->getNodeAtIndex(1);
	//die(var_dump($value));
	if ($value != 8) {
		echo "Test #11: Test getting a node at a specified index -> FAILED\n";
		continue;
	}
	echo "Test #11: Test getting a node at a specified index -> PASS\n";
} while (0);

//============================================================================
// Test #12: Test getting a node at a specified index out of range
do {
	$list = new LinkedList(array(5, 8, 2));
	if ($list->sizeOf() !== 3) {
		echo "Test #12: Test getting a node at a specified index out of range -> FAILED\n";
		continue;
	}
	if ($list->toString() != "2\n8\n5\n") {
		echo "Test #12: Test getting a node at a specified index out of range -> FAILED\n";
		continue;
	}
	try {
		$value = $list->getNodeAtIndex(5);
		echo "Test #12: Test getting a node at a specified index out of range -> FAILED\n";
		continue;
	} catch (Exception $e) {
	}
	echo "Test #12: Test getting a node at a specified index out of range -> PASS\n";
} while (0);