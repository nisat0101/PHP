<?php
trait programmingLanguage1{
public function php(){
    echo "php is good","<br>";
    
    echo "Php Is Very goood  for learning OOP";
}
}
trait programmingLanguage2{
    public function c(){
        echo "c is alos good";

    }
}
class phpLanguage{
    use programmingLanguage1;

}
$language1=New phplanguage();
$language1->php();
class clanguage{
    use programmingLanguage2;
    use programmingLanguage2;

}
$language2= new clanguage;
echo "<br>";
$language2->c();
?>