<?php

class man{
    public $name="hassan";
    public $age=50;
    public $addres;
    public $thakbiNakiJabi= "tui ja ";

     function info(){
        $this->name="karim";
        return$this->name ;
     }
}
$nisat =new man();
 $nisat->name="Rahim";
 echo $nisat->name;
 echo "<br>";
 echo $nisat->age=27;
 echo "<br>";
 echo $nisat->addres="savar";
 echo "<br>";
 echo $nisat->thakbiNakiJabi;
 echo "<br>";
echo $nisat->info();

?>
<?php

class Nan{
    public $name="hassan";
    public $age=50;
    public $addres;
    public $thakbiNakiJabi= "tui ja ";

     function info($name,$age,$address){
        $this->name=$name;
        $this->age=$name;
        $this->thakbiNakiJabi=$address;
        return "Name:".$this->name."age:".$this->age. "adress" .$this->thakbiNakiJabi
     }
}
$nisat =new Nan();
 $nisat->name="Rahim";
 echo $nisat->name;
 echo "<br>";
 echo $nisat->age=27;
 echo "<br>";
 echo $nisat->addres="savar";
 echo "<br>";
 echo $nisat->thakbiNakiJabi;
 echo "<br>";
echo $nisat->info("lachi");

?>

