<?php namespace LinkedList\Circular;

/**
 * Class List Node
 *
 * @package LinkedList\Node
 */
class Node
{
  public $data; // node data
  public $next; // next node

  /**
   * Node constructor
   *
   * @param mixed $data
   */
  public function __construct( $data )
  {
    $this->data = $data;
    $this->next = null;
  }
}