<?php

class Book
{
    public $title;
    public $author;
    public $price;
    public $weight;
    public $fileSize;
    public $type;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight = 0,
        int $fileSize = 0,
        string $type
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->type = $type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }


}