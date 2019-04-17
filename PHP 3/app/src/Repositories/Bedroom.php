<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 13:51
 */

class Bedroom extends Room {


    public $RoomNumber;
    public $price;


    public function __construct(string $RoomNumber, string $price)
    {
        $this->setBedCount(2);
        $this->setRoomType('Gold room');
        $this->setHasRestRoom(true);
        $this->setHasBalcony(true);
        $this->setRoomNumber($RoomNumber);
        $this->setPrice ($price);
        $this->setExtras(array(
            'TV', 'air-conditioner', 'refrigerator', 'mini-
            bar', 'bathtub'
        ));
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
