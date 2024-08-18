<?php

namespace App\Validation\Validators;

interface ValidatorInterface
{
    public function validate($value);

    public function getMessage(string $name): string;
}
