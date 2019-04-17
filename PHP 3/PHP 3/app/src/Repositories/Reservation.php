<?php namespace src\Repositories;
/**
 * Created by PhpStorm.
 * User: random_thoughts_vick
 * Date: 2019-04-17
 * Time: 13:07
 */


class Reservation implements ReservableInterface
{
    public $startDate;
    public $endDate;
    public $Guest;

    public function __construct(\DateTime $startDate,\DateTime $endDate, Guest $Guest)
    {
        $this->startDate = $startDate->format('Y-m-d');
        $this->endDate = $endDate->format('Y-m-d');
        $this->Guest = $Guest;
    }

    public function removeReservation($reservation): void
    {

    }
    public function addReservation($reservation): void
    {

    }

    public function getstartDate()
    {
        return $this->startDate;
    }

    public function setstartDate(string $startDate): void
    {
        $this->$startDate = $startDate;
    }
    public function getendDate()
    {
        return $this->endDate;
    }

    public function setendDate(string $endDate): void
    {
        $this->$endDate = $endDate;
    }


    public function setGuest(string $Guest): void
    {
        $this->Guest = $Guest;
    }



    public function __toString()
    {
        return "from <time>". $this->getStartDate() . " " . "to <time>".$this->getEndDate(). "</time>";
    }

}