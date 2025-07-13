<?php
session_start();

//old error 
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
$success = $_SESSION['success'] ?? "";

// clear data from session
unset($_SESSION['errors'], $_SESSION['old'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Input Form</h2>

<!-- Success message -->
<?php if ($success): ?>
    <div style="color:green;">
        <?php echo $success; ?>
    </div>
<?php endif; ?>

<form action="student_process.php" method="POST">
    <label>ID (Max 5 characters):</label><br>
    <input type="text" name="id" value="<?php echo htmlspecialchars($old['id'] ?? ''); ?>" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" required><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<!-- Show errors -->
<?php if (!empty($errors)): ?>
    <div style="color: red;">
        <h4>Validation Errors:</h4>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

</body>
</html>
