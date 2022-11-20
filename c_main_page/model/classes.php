<?php
/******************** FLATS CLASSES ***************************/

// ----------- FIELDS OF CLASS ---------------
class Flat{
    private $id;
    private $name;
    private $img;
    private $features;
    private $costPerNight;
    private $rooms;

    // ----------- CONSTRUCT FOR CLASS USE ---------------

    public function __construct($idEl, $nameEl, $imgEl, $featuresEl, $cpnEl, $roomsEl){
        $this->id = $idEl;
        $this->name = $nameEl;
        $this->img = $imgEl;
        $this->features = $featuresEl;
        $this->costPerNight = $cpnEl;
        $this->rooms = $roomsEl;
    }

}
/******************** HOTELS CLASSES ***************************/

class Hotel{

    // ----------- FIELDS OF CLASS ---------------
    private $id;
    private $name;
    private $img;
    private $features;
    private $costPerNight;
    private $beds;
    private $rating;
    private $fullyBooked;
    private $address;

    // ----------- CONSTRUCT FOR CLASS USE ---------------

    public function __construct($idEl, $nameEl, $imgEl, $featuresEl, $cpnEl, $bedsEl, $ratingEl, $bookedEl, $addressEl)
    {
        $this->id = $idEl;
        $this->name = $nameEl;
        $this->img = $imgEl;
        $this->features = $featuresEl;
        $this->costPerNight = $cpnEl;
        $this->beds = $bedsEl;
        $this->rating = $ratingEl;
        $this->fullyBooked = $bookedEl;
        $this->address = $addressEl;
    }

    // ----------- COST OF TRIP ---------------
    public static function calculateNumDays($startDate, $endDate) {

        // Calculating the difference in timestamps
        $diff = strtotime($endDate) - strtotime($startDate);

        // 1 day = 24 hours  ->  24 * 60 * 60 = 86400 seconds
        $numDays = abs(round($diff / 86400));

        return $numDays;
    }
}

/******************** HOUSES CLASSES ***************************/
/******************** CABINS CLASSES ***************************/


?>