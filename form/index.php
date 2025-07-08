<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="" method="post">
        <label for="txtid">ID:</label>
        <input type="text" name="txtid" id="txtid" required>
        <br><br>

        <label for="txtname">Name:</label>
        <input type="text" name="txtname" id="txtname" required>
        <br><br>

        <label for="txtaddress">Address:</label>
        <input type="text" name="txtaddress" id="txtaddress" required>
        <br><br>

        <input type="submit" name="btnSubmit" value="Submit">
    </form>

    <?php
    class Student {
        private $id;
        private $name;
        private $address;

        // Constructor
        public function __construct($id, $name, $address) {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
        }

        // Simulate storing data (you can connect to DB here)
        public function store() {
            echo "<h3>Data Stored Successfully!</h3>";
            echo "<strong>ID:</strong> " . $this->id . "<br>";
            echo "<strong>Name:</strong> " . $this->name . "<br>";
            echo "<strong>Address:</strong> " . $this->address . "<br>";
        }
    }

    if (isset($_POST["btnSubmit"])) {
        $id = $_POST["txtid"];
        $name = $_POST["txtname"];
        $address = $_POST["txtaddress"];

        $student = new Student($id, $name, $address);
        $student->store();
    }
    ?>
</body>
</html>
