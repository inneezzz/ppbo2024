<?php

require_once 'Author.php';
require_once 'Publisher.php';
require_once 'Book.php'; 

$author = new Author();
$author->name = "Tere Liye";
$author->description = "Penulis buku";

$publisher = new Publisher();
$publisher->name = "Gramedia";
$publisher->address = "Jakarta";
$publisher->setPhone("088123145678");

$book = new Book();
$book->ISBN = 223344;
$book->title = "Rembulan Tenggelam di Wajahmu";
$book->description = "Dunia fantasi tentang perjalanan hidup";
$book->category = "Novel";
$book->language = "Indonesia";
$book->numberOfPage = 401;
$book->author = $author->name;
$book->publisher = $publisher->name;

print_r($book->showAll());

?>