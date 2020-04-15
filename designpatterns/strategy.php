<?php
class quickSort
{
    public function __construct ()
    {
        echo "Quick Sort";
    }
}

class mergeSort
{
    public function __construct ()
    {
        echo "Merge Sort";
    }
}

$values = [2,4,8,1,3,10,3,23];
if (count($values) > 10) {
    new quickSort ();
}
else
{
    new mergeSort ();
}
?>
