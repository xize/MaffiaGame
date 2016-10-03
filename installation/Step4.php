<?php
class Step4 implements Step {

    public function showStep()
    {

    }

    public function createConnectionFile() {
        $file = fopen("../includes/connection/connection.php", "w") or die("unable to save file!");

        $networkl = "define(\"NETWORK\", \"". $_POST['network'] ."\");\n";
        $userl = "define(\"USER\", \"". $_POST['user'] ."\");\n";
        $passwordl = "define(\"PASSWORD\", \"". $_POST['password'] ."\");\n";
        $databasel = "define(\"DATABASE\", \"". $_POST['database'] ."\");\n";

        $connection = "<?php\n\n".$networkl."".userl."".$passwordl."".$databasel."\nmysqli_connect(NETWORK, USER, PASSWORD) && mysqli_select_db(DATABASE) or die(\"<span class=\"sqlerror\"/>cannot connect to the database!, please try again later</span>\");";

        fwrite($file,  $connection);
        fclose($file);

    }
}