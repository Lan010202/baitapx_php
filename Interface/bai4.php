<?php

interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function sort() {
        sort($this->array);
    }

    public function getSortedArray() {
        return $this->array;
    }
}

class LinkedListSorter implements Sortable {
    protected $list;

    public function __construct($list) {
        $this->list = $list;
    }

    public function sort() {
        // Code to sort the linked list
        // ...
        print "LinkedList sorted\n";
    }
}

// Create an ArraySorter object
$arraySorter = new ArraySorter([4, 2, 7, 1, 5]);
$arraySorter->sort();
$sortedArray = $arraySorter->getSortedArray();
print "Sorted Array: " . implode(", ", $sortedArray) . "\n";

// Create a LinkedListSorter object
$linkedListSorter = new LinkedListSorter([3, 1, 6, 2, 4]);
$linkedListSorter->sort();

?>
