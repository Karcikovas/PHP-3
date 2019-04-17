<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 20:15
 */


public static function bookRoom(Room $room, Reservation $reservation) {
    $room->addReservation($reservation);
    echo $room . " successfully booked for ". $reservation->getGuest(). " ". $reservation;
}
