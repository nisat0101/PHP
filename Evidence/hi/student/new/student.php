<?php
class Student {   
    private $id;
    private $name;
    private $email;  
    
    private static $file_path = "data.txt"; 
    
    // Constructor with validation
    function __construct($_id, $_name, $_email){
        $errors = [];

        if (strlen($_id) > 5) {
            $errors[] = "";
        }
        if (empty(trim($_name))) {
            $errors[] = "Name cannot be empty.";
        }
        if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (!empty($errors)) {
            throw new Exception(implode(" ", $errors));
        }

        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
    }
  
    public function csv(){
        return $this->id . "," . $this->name . "," . $this->email . PHP_EOL;
    }
   
    public function save(){
        file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
    }
       
    public static function display_students(){
        if (!file_exists(self::$file_path)) {
            echo "No student data found.";
            return;
        }

        $students = file(self::$file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        echo '<table border="1" cellpadding="5" cellspacing="0">';
        echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';

        foreach($students as $student){
            list($id, $name, $email) = explode(",", $student);
            echo '<tr>';
            echo '<td>' . htmlspecialchars($id) . '</td>';
            echo '<td>' . htmlspecialchars($name) . '</td>';
            echo '<td>' . htmlspecialchars($email) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }   
}
?>
