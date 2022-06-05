<?php

namespace Uproject\Library;

class Customer
{
    public function __construct(private string $name)
    {
    }
    public function sayHello(string $name = "Guest Engka"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}
