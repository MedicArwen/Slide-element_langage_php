<?php
require_once('point.php');
class Triangle
{
    public $pointA;
    public $pointB;
    public $pointC;
    public function __construct($pA,$pB,$pC)
    {
        $this->pointA = $pA;
        $this->pointB = $pB;
        $this->pointC = $pC;
    }
}
?>