<?php

namespace BookLibrary\Models;

class Author
{
    private string $firstName;
    private string $lastName;
    private ?string $alias;

    public function __construct(string $firstName, string $lastName, ?string $alias = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->alias = $alias;
    }
}
