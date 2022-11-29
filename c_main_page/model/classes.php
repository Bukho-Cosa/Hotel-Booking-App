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

    // ----------- GET AND SET ---------------
    public function getId()
    {
        return $this->id;
    }
    public function setId($idEl)
    {
        $this->id = $idEl;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($nameEl)
    {
        $this->name = $nameEl;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }
    public function setImg($imgEl)
    {
        $this->img = $imgEl;

        return $this;
    }

    public function getFeatures()
    {
        return $this->features;
    }
    public function setFeatures($featuresEl)
    {
        $this->features = $featuresEl;

        return $this;
    }

    public function getCPN()
    {
        return $this->costPerNight;
    }
    public function setCPN($cpnEl)
    {
        $this->costPerNight = $cpnEl;

        return $this;
    }

    public function getRooms()
    {
        return $this->rooms;
    }
    public function setRooms($roomsEl)
    {
        $this->rooms = $roomsEl;

        return $this;
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

    // ----------- GET AND SET ---------------
    public function getId()
    {
        return $this->id;
    }
    public function setId($idEl)
    {
        $this->id = $idEl;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($nameEl)
    {
        $this->name = $nameEl;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }
    public function setImg($imgEl)
    {
        $this->img = $imgEl;

        return $this;
    }

    public function getFeatures()
    {
        return $this->features;
    }
    public function setFeatures($featuresEl)
    {
        $this->features = $featuresEl;

        return $this;
    }

    public function getCPN()
    {
        return $this->costPerNight;
    }
    public function setCPN($cpnEl)
    {
        $this->costPerNight = $cpnEl;

        return $this;
    }

    public function getBeds()
    {
        return $this->beds;
    }
    public function setBeds($bedsEl)
    {
        $this->beds = $bedsEl;

        return $this;
    }

    public function getRating()
    {
        return $this->rating;
    }
    public function setRatings($ratingEl)
    {
        $this->rating = $ratingEl;

        return $this;
    }

    public function getBooked()
    {
        return $this->fullyBooked;
    }
    public function setBooked($bookedEl)
    {
        $this->fullyBooked = $bookedEl;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($addressEl)
    {
        $this->address = $addressEl;

        return $this;
    }
}

/******************** HOUSES CLASSES ***************************/
/******************** CABINS CLASSES ***************************/


?>