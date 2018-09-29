<?php
class DB_Connect {

    // constructor
    function __construct() {

    }

    // destructor
    function __destruct() {
        // $this->close();
    }

    // Connecting to database
    public function connect() {
        require_once 'config.php';

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  
        if (!$conn) {
            // echo "FAILURE CONNECTION ERROR" . "<br>";
            die("Connection failed: " . mysqli_connect_error());
        }

        // echo "Connected to DB" . DB_DATABASE . "<br>";

        return $conn;
    }

    // Closing database connection
    public function close() {
        mysqli_close();
    }

}

?>
