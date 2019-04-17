<?php namespace src\Repositories;


use \src\Repositories\ReservableInterface\reservation;

 class Room  implements ReservableInterface{

    public $RoomNumber;
    public $price;
    public $BedCount;
    public $RoomType;
    public $HasRestRoom;
    public $HasBalcony;
    public $Extras;
    public $reservations;



     /**
      * @param array $reservations
      */
     public function setReservations(array $reservations): void
     {
         $this->reservations = $reservations;
     }
     public function addReservation( $reservation): void
     {
         $this->reservations = $reservation;
     }
     public function removeReservation( $reservation): void
     {
         die;
     }

     public function setreservation(array $reservation): void
     {
         $this->reservation = $reservation;
     }

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