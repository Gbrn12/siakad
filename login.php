<?php
// Proses Login
include('koneksi.php');
session_start();

if (isset($_POST['login'])) {
    // Mendapatkan nilai username, password, dan role dari form login
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // Validasi input
    if (!empty($username) && !empty($password) && !empty($role)) {
        // Membuat query SQL untuk mendapatkan pengguna berdasarkan username dan role
        $stmt = $conn->prepare("SELECT `username`, `password`, `role` FROM `login` WHERE `username` = ? AND `role` = ?");
        $stmt->bind_param("ss", $username, $role);
        $stmt->execute();
        $stmt->store_result();

        // Jika pengguna ditemukan
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($db_username, $db_password, $db_role);
            $stmt->fetch();

            // Verifikasi password
            if (password_verify($password, $db_password)) {
                // Set session variables
                $_SESSION['username'] = $db_username;
                $_SESSION['role'] = $db_role;

                // Redirect based on role
                if ($db_role === 'admin') {
                    header("Location: welcome.php");
                } else {
                    header("Location: user.php");
                }
                exit();
            } else {
                echo "Invalid username, password, or role.";
            }
        } else {
            echo "Invalid username, password, or role.";
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

// Menutup koneksi ke database
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login&signin.css?v=<?php echo time();?>">
</head>
<body>
    <form method="post" id="login-form">
        <h2>Login SIAKAD</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="custom-select">
            <select name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <input type="submit" name="login" value="Login">
        <a href="signin.php">Sign up now</a>
    </form>
    <script src="java.js?v=<?php echo time();?>"></script>
</body>
</html>
