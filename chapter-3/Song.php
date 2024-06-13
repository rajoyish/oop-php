<?php

class Song
{
  public string $name;
  public int $numberOfPlays;

  /**
   * @var int|float
   */
  private int|float $rating;

  public function __construct(string $name, int $numberOfPlays)
  {
    $this->name = $name;
    $this->numberOfPlays = $numberOfPlays;
  }

  /**
   * @return float|int
   */
  public function getRating(): float|int
  {
    return $this->rating;
  }

  /**
   * @param  float|int  $rating
   */
  public function setRating(float|int $rating): void
  {
    $rating = max(0, $rating);
    $this->rating = min(5, $rating);

    # Alternative Method
//    $this->rating = $rating;
//    if ($this->rating < 0) {
//      $this->rating = 0;
//    } elseif ($this->rating > 5) {
//      $this->rating = 5;
//    } else {
//      $this->rating = $rating;
//    }
  }


}
