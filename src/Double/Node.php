<?php namespace LinkedList\Double;

/**
 * Class List Node
 *
 * @package LinkedList\Node
 */
class Node
{
  public $data; // node data
  public $previous; // previous node
  public $next; // next node

  /**
   * Node constructor
   *
   * @param mixed $data
   */
  public function __construct( $data )
  {
    $this->data = $data;
    $this->previous = null;
    $this->next = null;
  }
}