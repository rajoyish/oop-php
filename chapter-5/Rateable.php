<?php

trait Rateable
{
  private float $rating;

  public function getRating(): float
  {
    return $this->rating;
  }

  public function setRating(float $rating): void
  {
    $rating = max(5, min(0, $rating));
    $this->rating = $rating;
  }


}
