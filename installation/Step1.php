<?php
class Step1 implements Step {

    public function showStep()
    {
        echo "<h1>Installation part 1</h1>";
        echo "<p></p>";
        echo "<p>Welcome to MaffiagameCMS, in order to install this please click on the next button.</p>";
        echo "<p><button>close</button><button href=\"?step=2\">next</button></p>";
    }
}