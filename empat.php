<?php

class Author {
    public $name;
    public $description;

}

class Publisher {
    public $name;
    public $address;
    public$phone;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Language' => $this->language,
            'Number of Page' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
        ];
        
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return null;
    }
}

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