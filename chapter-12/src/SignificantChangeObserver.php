<?php

namespace App;

use SplObserver;
use SplSubject;

class SignificantChangeObserver implements SplObserver
{
    public function update(SplSubject $stock): void
    {
        if (abs($stock->getChange()) > 5) {
            echo "Notify stockholder of new price by preferred notification means \n";
        }
    }
}
