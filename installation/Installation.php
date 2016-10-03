<?php


class Installation
{

    private $step1;
    private $step2;
    private $step3;

    /**
     * shows the step of the installation
     *
     * @return Step
     */
    public function getStep() {

        if($this->isInstalled()) {
            return;
        }

        if($this->step1 == null)
            $this->step1 = new Step1();
        if($this->step2 == null)
            $this->step2 = new Step2();
        if($this->step3 == null)
            $this->step3 = new Step3();

        $safestep = (isset($_GET['step']) ? $_GET['step'] : 0); //avoid NPE by using a safe ternary operator.

        switch($safestep) {
            case 1 || 0:
                $this->step1->showStep();
                break;
            case 2:
                $this->step2->showStep();
                break;
            case 3:
                $this->step3->showStep();
                break;
            default:
                $this->step1->showStep();
        }
    }

    /**
     * returns true if the installation is already active.
     *
     * @return bool
     */
    public function isInstalled() {
        if(file_exists("../includes/connection/connect.php")) {
            return true;
        }
        return false;
    }
}

interface Step {
    /**
     * shows the step required by this interface
     *
     * @return mixed
     */
    public function showStep();
}

class Step1 implements Step {

    public function showStep()
    {
        // TODO: Implement showStep() method.
    }
}

class Step2 implements Step {

    public function showStep()
    {
        // TODO: Implement showStep() method.
    }
}

class Step3 implements Step {
    public function showStep()
    {
        // TODO: Implement showStep() method.
    }
}