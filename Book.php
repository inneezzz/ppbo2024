<?php

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