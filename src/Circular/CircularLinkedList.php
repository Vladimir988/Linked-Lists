<?php namespace LinkedList\Circular;

/**
 * Class Singly Linked List
 *
 * @package LinkedList\CircularLinkedList
 */
class CircularLinkedList
{
  private $header; // header node

  /**
   * CircularLinkedList constructor
   *
   * @param mixed $data
   */
  public function __construct( $data )
  {
    $this->header = new Node( $data );
    $this->header->next = $this->header;
  }

  /**
   * Find node
   *
   * @param mixed $item
   *
   * @return Node
   */
  public function find( $item )
  {
    $current = $this->header;
    while ( $current->data != $item ) {
      $current = $current->next;
    }

    return $current;
  }

  /**
   * Insetr node
   *
   * @param mixed $item // item data
   * @param mixed $new
   *
   * @return boolean
   */
  public function insert( $item, $new )
  {
    $newNode = new Node( $new );
    $current = $this->find( $item );
    if( $current->next != $this->header ) {
      $current->next = $newNode;
      $newNode->next = $current->next;
    } else {
      $current->next = $newNode;
      $newNode->next = $this->header;
    }

    return true;
  }

  /**
   * Delete node
   *
   * @param mixed $item // item data
   */
  public function delete( $item )
  {
    $current = $this->find( $item );
    while ( $current->next != null && $current->next->data != $item ) {
      $current = $current->next;
    }

    if( $current->next != $this->header ) {
      $current->next = $current->next->next;
    } else {
      $current->next = $this->header;
    }
  }

  /**
   * Display linked list
   */
  public function display()
  {
    $current = $this->header;
    if( $current->next == null ) {
      echo 'Linked list is empty!';
      return;
    }

    while ( $current->next != $this->header ) {
      echo $current->next->data . PHP_EOL;
      $current = $current->next;
    }

    echo '<br>';
  }
}