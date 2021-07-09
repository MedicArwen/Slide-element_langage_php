<?php
class Point 
{
    public $x;
    public $y;

    public function __construct($pX,$pY)
    {
        $this->x =$pX;
        $this->y = $pY;
        var_dump($this);
    }
}
?>