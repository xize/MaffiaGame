<?php
class Step2 implements Step {

    public function showStep()
    {
        echo "<h1>Installation part 2</h1>";
        echo "<p></p>";
        echo "<p>please fill in your database settings and click on next.</p>";
        echo "<form name=\"databasettings\" method=\"post\" action=\"?step=3\"/>";
        echo "    <p>database ip: <input type=\"text\" name=\"databaseserver\" value=\"localhost\"/></p>";
        echo "    <p>database user: <input type=\"text\" name=\"databaseuser\" value=\"root\"/></p>";
        echo "    <p>database password: <input type=\"password\" name=\"databasepassword\" value=\"password\"/></p>";
        echo "    <p>database name: <input type=\"text\" name=\"databasename\" value=\"localhost\"/></p>";
        echo "    <p><button>close</button><button type=\"submit\">next</button></p>";
        echo "</form>";
    }
}