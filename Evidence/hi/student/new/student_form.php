<?php
include "Student.php";

$id = $name = $email = "";
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);  // Use 'email' here

    try {
        $student = new Student($id, $name, $email);
        $student->save();
        $success = "Student saved successfully.";

        // Clear form data on success
        $id = $name = $email = "";
    } catch (Exception $e) {
        $errors[] = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<?php if ($success): ?>
    <div style="color: green;"><?php echo htmlspecialchars($success); ?></div>
<?php endif; ?>

<?php if ($errors): ?>
    <div style="color: red;">
        <?php foreach ($errors as $error) {
            echo htmlspecialchars($error) . "<br>";
        } ?>
    </div>
<?php endif; ?>

<form action="" method="POST">
    <label>ID :</label><br>
    <input type="number" name="id" value="<?php echo htmlspecialchars($id); ?>" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

    <input type="submit" value="Save Student">
</form>

<hr>

<h3>All Students:</h3>
<?php Student::display_students(); ?>

</body>
</html>
