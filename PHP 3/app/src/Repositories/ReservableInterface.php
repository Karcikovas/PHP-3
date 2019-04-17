<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 20:24
 */


interface ReservableInterface
{
    public function addReservation(Reservation $reservation) :void;
    public function removeReservation(Reservation $reservation) :void;
}