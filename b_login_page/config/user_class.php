<?php
session_start();

/************* LOG IN USER DATA ******************/

if (isset($_POST['logIn'])) {
    $logUsername = $_POST['logUsername'];
    $logPasscode = $_POST['logPasscode'];
};

/************* REGISTER USER DATA ******************/

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $firstName = $_POST['name'];
    $lastName = $_POST['surname'];
    $password = $_POST['passcode'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    //if needed

    $_SESSION['user'] = [
        'username' => $username,
        'fullName' => $firstName. " " . $lastName,
        'email' => $email
    ];
}

$fullname = $firstName. " " .$lastName;

class User {

    // ===================================== Fields =========================================
    
    private $id;
    private $username;
    private $fullname;
    private $password;
    private $email;
    private $address;

    // ===================================== Constructor =========================================
    
    public function __construct($username,$password,$email,$address,$fullname) {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->address = $address;
        $this->fullname = $fullname;

        $this->id = $this->generateId();
    }

    // ===================================== Methods =========================================

    private function generateId() {

        $randomNumber = rand(10000, 90000);
        $id = md5($randomNumber);
    }

    public function createUser($User) {

        $DbConfig = new DbConfig(); 
        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "INSERT INTO property (id, username, password, email, address, fullname)" .
                     "VALUES ('$User->id','$User->username','$User->password','$User->email','$User->address','$User->fullname')";

        // Send request
        if ($result = $connection->query($statement)) {

            return $result; // either true or false
            $connection->close();

        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    }

    // ===================================== Get & Set =========================================

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getFullname()
    {
        return $this->fullname;
    }
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }
}
