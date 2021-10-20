<?php

namespace BookLibrary\Models;

class Book
{
    private string $title;
    private Author $author;

    public function __construct(string $title, Author $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}
