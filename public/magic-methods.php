<?php 
class persen 
{
    public $name = "ali";
    private $phone = 123456;
    public function __construct()
    {
       // echo "__constractor is callad". PHP_EOL;
         
    }
    public function __destruct()
    {
        require 'ali.php';
        

    }

    public function __toString()
    {
        return "name: $this->name. phone: $this->phone ";
    }
}

$p = new persen();
echo $p;
echo "
";
echo "aki djnfwejo";
?>