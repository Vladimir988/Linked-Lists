<?php namespace LinkedList\Double;

/**
 * Class Singly Linked List
 *
 * @package LinkedList\DoubleLinkedList
 */
class DoubleLinkedList
{
  private $header; // header node

  /**
   * DoubleLinkedList constructor
   *
   * @param mixed $data
   */
  public function __construct( $data )
  {
    $this->header = new Node( $data );
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
   * Find node
   *
   * @return Node
   */
  public function findLast()
  {
    $current = $this->header;
    while ( $current->data != null ) {
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
    $newNode->next = $current->next;
    $newNode->previous = $current;
    $current->next = $newNode;
    return true;
  }

  /**
   * Delete node
   *
   * @param mixed $item // item data
   *
   * @return boolean
   */
  public function delete( $item )
  {
    $current = $this->find( $item );
    if( $current->next != null ) {
      $current->previous->next = $current->next;
      $current->next->previous = $current->previous;
      $current->next = null;
      $current->previous = null;
      return true;
    }

    return false;
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

    while ( $current->next != null ) {
      echo $current->next->data . PHP_EOL;
      $current = $current->next;
    }

    echo '<br>';
  }

  /**
   * Display reverse linked list
   */
  public function displayReverse()
  {
    $current = $this->findLast();

    while ( $current->previous != null ) {
      echo $current->data . PHP_EOL;
      $current = $current->previous;
    }

    echo '<br>';
  }
}