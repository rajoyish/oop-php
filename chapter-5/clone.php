<?php

class Manager
{
  public function __construct(public string $name)
  {
  }
}

$managerOne = new Manager('Rajesh B');
$managerTwo = clone $managerOne;
$managerTwo->name = 'Sunil G';
print_r($managerOne);
print_r($managerTwo);

class Department
{
  public function __construct(public string $name, public Manager $manager)
  {
  }

  public function __clone(): void
  {
    $this->manager = clone $this->manager;
  }
}

$departmentOne = new Department('Sales', $managerOne);
$departmentTwo = clone $departmentOne;
$departmentTwo->name = 'Product';
$departmentTwo->manager->name = 'Anu G';
print_r($departmentOne);
print_r($departmentTwo);
