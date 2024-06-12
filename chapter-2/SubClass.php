<?php

class SubClass extends BaseClass
{
  public function getParentProtectedProperty(): string
  {
    return $this->protectedProperty;
  }

//  public function getParentPrivateProperty()
//  {
//    return $this->privateProperty;
//  }

}
