<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 12:01
 */

class Guest
{
    public $name;
    public $lastName;

    public function __construct(string $name, string $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function __toString()
    {
        return '<strong>'.$this->name . ' ' . $this->lastName.'</strong>';
    }
}
