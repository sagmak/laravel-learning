<?php
    class Node{

        public $data;
        public $prev;
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

    $first = new Node();
    $first->data = 10;
    $first->next = null;
    $first->prev = null;

    $MyList->head = $first;

    $first->next = $MyList->head;

    $MyList->head->prev = $first;

    $second = new Node();
    $second->data = 20;
    $second->next = null;

    $second->prev = $first;
    $first->next = $second;

    $second->next = $MyList->head;

    $MyList->head->prev = $second;

    $third = new Node();
    $third->data = 30;
    $third->next = null;

    $third->prev = $second;
    $second->next = $third;

    $third->next = $MyList->head;

    $MyList->head->prev = $third;

    $MyList->PrintList();
?>