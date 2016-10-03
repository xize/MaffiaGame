<?php
class Step3 implements Step {

    private $network;
    private $user;
    private $password;
    private $database;

    public function __construct() {
        $this->network =  mysqli_real_escape_string(addslashes($_GET['databaseserver']));
        $this->user = mysqli_real_escape_string(addslashes($_GET['databaseuser']));
        $this->password = mysqli_real_escape_string(addslashes($_GET['databasepassword']));
        $this->database = mysqli_real_escape_string(addslashes($_GET['databasename']));
    }

    public function showStep()
    {
        if($this->validateDatabase()) {

            $_POST['network'] = $this->network;
            $_POST['user'] = $this->user;
            $_POST['password'] = $this->password;
            $_POST['database'] = $this->database;

            echo "<h1>Installation part 3</h1>";
            echo "<p></p>";
            echo "<p>database connected with success, please click next</p>";
            echo "<p><button>close</button><button type=\"submit\" href=\"?step=4\">finish</button></p>";
        } else {
            echo "<h1>Installation part 3</h1>";
            echo "<p></p>";
            echo "<p>Error: either the database ip, user or password or database is incorrect!</p>";
            echo "<p>".mysqli_connect_errno()."</p>";
        }
    }

    private function validateDatabase() {
        if(mysqli_connect($this->network, $this->user, $this->password, $this->database)) {
            if(mysqli_select_db($this->database)) {
                return true;
            }
        }
        return false;
    }
}