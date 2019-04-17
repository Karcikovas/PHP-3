<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 20:15
 */

use src\Repositories\Guest;

class BookingManager
{
    public static function bookRoom(Room $Room, Reservation $reservation)
    {
        echo $Room . " successfully  " . $reservation->getGuest() . " " . $reservation;
    }
}