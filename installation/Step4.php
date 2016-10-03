<?php
class Step4 implements Step {

    public function showStep()
    {

    }

    public function createConnectionFile() {
        $file = fopen("../includes/connection/connection.php", "w") or die("unable to save file!");

        $networkl = "define(\"network\", \"". $_POST['network'] ."\");\n";
        $userl = "define(\"user\", \"". $_POST['user'] ."\");\n";
        $passwordl = "define(\"password\", \"". $_POST['password'] ."\");\n";
        $databasel = "define(\"database\", \"". $_POST['database'] ."\");\n";

        $connection = "<?php\n\n".$networkl."".userl."".$passwordl."".$databasel."\n";
    }
}