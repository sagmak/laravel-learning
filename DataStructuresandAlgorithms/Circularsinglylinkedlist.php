<?php

    class Node {
    public $data;
    public $next;
    }

    class LinkedList {
    public $head;

    public function __construct(){
        $this->head = null;
    }

    public function PrintList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
        echo "The list contains: ";
        while(true) {
            echo $temp->data." ";
            $temp = $temp->next;
            if($temp == $this->head)
            break;
        }
        echo "\n";
        } else {
        echo "The list is empty.\n";
        }
    }
    };

    $MyList = new LinkedList();

    //Add first node.
    $first = new Node();
    $first->data = 10;
    $MyList->head = $first;
    $first->next = $MyList->head;

    //Add second node.
    $second = new Node();
    $second->data = 20;
    $first->next = $second;
    $second->next = $MyList->head;

    //Add third node.
    $third = new Node();
    $third->data = 30;
    $second->next = $third;
    $third->next = $MyList->head;

    //print the content of list
    $MyList->PrintList();

?>