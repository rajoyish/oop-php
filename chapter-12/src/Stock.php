<?php

namespace App;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Stock implements SplSubject
{
    private int $price = 0;

    private int $change;

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }

    public function getLatestPrice(): void
    {
        echo "\nStock: Fetching price update from 3rd party API.\n";

        $newPrice = random_int(0, 10);
        $this->change = $newPrice - $this->price;
        $this->price = $newPrice;

        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getChange(): int
    {
        return $this->change;
    }
}
