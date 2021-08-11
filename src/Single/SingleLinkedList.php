<?php namespace LinkedList\Single;

/**
 * Class Singly Linked List
 *
 * @package LinkedList\SingleLinkedList
 */
class SingleLinkedList
{
  private $header; // header node

  /**
   * SingleLinkedList constructor
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
    $current->next = $newNode;
    return true;
  }

  /**
   * Update node
   *
   * @param mixed $old // item data
   * @param mixed $new // item data
   *
   * @return mixed
   */
  public function update( $old, $new )
  {
    $current = $this->header;
    if( $current->next == null ) {
      echo 'Linked list is empty!';
      return;
    }

    while ( $current->next != null ) {
      if( $current->data == $old ) {
        break;
      }

      $current = $current->next;
    }
    
    if( $current->data != $old ) {
      $this->insert( $current->data, $new );
      $current = $current->next;
    }

    return $current->data = $new;
  }

  /**
   * Find previous node
   *
   * @param mixed $item // item data
   *
   * @return Node
   */
  public function findPrevious( $item )
  {
    $current = $this->header;
    while ( $current->next != null && $current->next->data != $item ) {
      $current = $current->next;
    }

    return $current;
  }

  /**
   * Delete node
   *
   * @param mixed $item // item data
   */
  public function delete( $item )
  {
    $previous = $this->findPrevious( $item );
    if( $previous->next != null ) {
      $previous->next = $previous->next->next;
    }
  }

  /**
   * Remove node
   *
   * @param mixed $item // item data
   */
  public function remove( $item )
  {
    $current = $this->header;
    while ( $current->next != null && $current->next->data != $item ) {
      $current = $current->next;
    }

    if( $current->next != null ) {
      $current->next = $current->next->next;
    }
  }

  /**
   * Clear linked list
   */
  public function clear()
  {
    $this->header = null;
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
}