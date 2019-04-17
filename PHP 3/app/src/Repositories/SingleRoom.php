<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 13:35
 */

class SingleRoom extends Room
{
    public $RoomNumber;
    public $price;

    public function __construct(string $RoomNumber, string $price)
    {
        $this->setBedCount(1);
        $this->setRoomType('Standart room');
        $this->setHasRestRoom(true);
        $this->setHasBalcony(false);
        $this->setRoomNumber($RoomNumber);
        $this->setPrice ($price);
        $this->setExtras(array('TV, air-conditioner'));
    }

    public function getRoomNumber(): string
    {
        return $this->RoomNumber;
    }
    public function setRoomNumber(string $RoomNumber): void
    {
        $this->RoomNumber = $RoomNumber;
    }

    public function getprice(): string
    {
        return $this->price;
    }
    public function setprice(string $price): void
    {
        $this->price = $price;
    }

}


