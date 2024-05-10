<?php
require_once("dbConnection.php");

// Login functionality
if (isset($_POST['submit'])) {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Query to retrieve user data
    $query = "SELECT * FROM admins WHERE admin_email =? AND admin_password =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $admin_email, $admin_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful, redirect to admin dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid email or password';
    }
}

// HTML and Bootstrap template
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('image/panelle.JPEG');
            background-size: cover;
            background-blur: 5px;
        }
      .container {
            max-width: 300px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
      .logo {
            width: 100px;
            height: 100px;
            margin: 20px auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="image/logo bajak.png" alt="Logo" class="logo">
        <h2 class="text-center">Dashboard</h2>
        <?php if (isset($error)) {?>
            <div class="alert alert-danger"><?= $error?></div>
        <?php }?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
                <label for="admin_email">Email</label>
                <input type="email" id="admin_email" name="admin_email" class="form-control">
            </div>
            <div class="form-group">
                <label for="admin_password">mot de passe</label>
                <input type="password" id="admin_password" name="admin_password" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Connexion</button>
        </form>
    </div>
</body>
</html>