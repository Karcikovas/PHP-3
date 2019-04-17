<?php namespace src\Repositories;

class Room  {

    public $RoomNumber;
    public $price;
    public $BedCount;
    public $RoomType;
    public $HasRestRoom;
    public $HasBalcony;
    public $Extras;
    public $reservation;



    public function getBedCount(): string
    {
        return $this->BedCount;
    }
    public function setBedCount(string $BedCount): void
    {
        $this->BedCount = $BedCount;
    }

    public function getRoomType(): string
    {
        return $this->BedCount;
    }
    public function setRoomType(string $RoomType): void
    {
        $this->RoomType = $RoomType;
    }
    public function getHasRestRoom(): bool
    {
        return $this->HasRestRoom;
    }
    public function setHasRestRoom(string $HasRestRoom): void
    {
        $this->HasRestRoom = $HasRestRoom;
    }

    public function getHasBalcony(): bool
    {
        return $this->HasBalcony;
    }
    public function setHasBalcony(string $HasBalcony): void
    {
        $this->HasBalcony = $HasBalcony;
    }

    public function getExtras(): array
    {
        return $this->Extras;
    }
    public function setExtras(array $Extras): void
    {
        $this->Extras = $Extras;
    }


    public function __toString()
    {
        return '<strong>'.$this->price . ' ' . $this->RoomNumber.'</strong>';
    }
}