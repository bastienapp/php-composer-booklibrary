<?php

namespace BookLibrary\Controllers;

use BookLibrary\Models\Author;
use BookLibrary\Models\Book;

class BookController
{
    public function getAll(): array
    {
        $musso = new Author('Guillaume', 'Musso');
        $livre = new Book('La vie est un roman', $musso);

        return [$livre, $livre, $livre];
    }
}
