<?php
session_start();

if (isset($_POST['submit'])) {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    $errors = [];

    // ID validation
    if (strlen($id) > 5) {
        $errors[] = "ID must be at most 5 characters.";
    }

    // Email validation
    if (!strpos($email, '@') || !strpos($email, '.')) {
        $errors[] = "Email must contain '@' and '.'";
    }

    if (!empty($errors)) {
        // Save errors and old input to session and redirect back
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = ['id' => $id, 'name' => $name, 'email' => $email];
        header("Location: student_form.php");
        exit();
    } else {
        // Success message in session
        $_SESSION['success'] = "Student created successfully!<br>ID: $id<br>Name: $name<br>Email: $email";
        header("Location: student_form.php");
        exit();
    }
} else {
    header("Location: student_form.php");
    exit();
}
