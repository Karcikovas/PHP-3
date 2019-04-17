<?php

use src\Repositories\Guest as Guest;
use \src\Repositories\SingleRoom as SingleRoom;
use \src\Repositories\Bedroom as Bedroom;
use \src\Repositories\Apartment as Apartment;
use \src\Repositories\Reservation;
use \src\Repositories\BookingManager;

require_once 'app/start.php';

$Room = new Apartment('103', '190$');
$Guest = new Guest("Viktoras", "Karcikovas");
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');

BookingManager::bookRoom($room, $reservation);
