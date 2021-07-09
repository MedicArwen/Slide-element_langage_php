<?php
require_once('point.php');
class Rectangle
{
    public $pointA;
    public $pointB;
    public $pointC;
    public $pointD;
    public function __construct($pA,$pB,$pC,$pD)
    {
        $this->pointA = $pA;
        $this->pointB = $pB;
        $this->pointC = $pC;
        $this->pointD = $pD;
    }
}
?>