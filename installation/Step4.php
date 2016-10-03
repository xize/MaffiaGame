<?php
class Step4 implements Step {

    public function showStep()
    {
        $this->createConnectionFile();

    }

    public function createTables() {
        include "../includes/connection/connection.php";

    }

    public function createConnectionFile() {
        $file = fopen("../includes/connection/connection.php", "w") or die("unable to save file!");

        $connection = "<?php\n";
        $connection .= "define(\"NETWORK\", ".$_POST['network'].");\n";
        $connection .= "define(\"USER\", ".$_POST['user'].");\n";
        $connection .= "define(\"PASSWORD\", ".$_POST['password']."\n);";
        $connection .= "define(\"DATABASE\", ".$_POST['db']."\n);";
        $connection .= "\n\n";
        $connection .= "class Connection {\n";
        $connection .= "{";
        $connection .= "\n";
        $connection .= '    private static $con;\n';
        $connection .= '    private $sql;\n\n';
        $connection .= "    public function __construct() {\n";
        $connection .= '        $this->sql = new mysqli(NETWORK, USER, PASSWORD, DATABASE);\n';
        $connection .= "    }\n\n";
        $connection .= "    public function getConnection() {\n";
        $connection .= "        return $this->sql;\n";
        $connection .= "    }\n\n";
        $connection .= "    public static function getMysqlServer() {\n";
        $connection .= "        if(SELF::con != null) {\n";
        $connection .= '            $con = new Connection();\n';
        $connection .= "        }\n";
        $connection .= '        return $con;\n';
        $connection .= "    }\n\n";
        $connection .= "}";

        fwrite($file,  $connection);
        fclose($file);

    }
}