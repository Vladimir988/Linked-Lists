<?php require_once __DIR__ . '/vendor/autoload.php';

use LinkedList\Single\SingleLinkedList;
use LinkedList\Double\DoubleLinkedList;
use LinkedList\Circular\CircularLinkedList;

/**
 * SingleLinkedList
 */
$sLinkedList = new SingleLinkedList('header');
$sLinkedList->insert('header', 'China');
$sLinkedList->insert('China', 'USA');
$sLinkedList->insert('USA','England');
$sLinkedList->insert('England','Australia');
$sLinkedList->display(); // China USA England Australia
$sLinkedList->delete('USA');
$sLinkedList->display(); // China England Australia
$sLinkedList->update('England', 'Japan');
$sLinkedList->update('Canada', 'Ukraine');
$sLinkedList->display(); // China Japan Australia
$sLinkedList->clear();
$sLinkedList->display(); // Linked list is empty!