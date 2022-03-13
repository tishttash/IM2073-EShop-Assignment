<?php
//test
class DBController_final
{
    //Database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'bakery';

    //connection property
    public $con = null;

    //call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        
        if($this->con->connect_error) {
            echo"Fail".$this->con->connect_error;
        }
        // CAN REMOVE THE BELOW MESSAGE WHEN DONE, THIS IS JUST FOR DEBUGGING, TO SEE IF YOU SUCCESSFULLY CONNECT!
        echo'connection successful!';
    }

    public function __destruct(){
        $this->closeConnection();
    }

    //for mysql closing connection
    protected function closeConnection() {
        if($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

?>