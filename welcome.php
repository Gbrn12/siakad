<?php
// Mulai session
session_start();

// Cek apakah pengguna telah login dan memiliki peran admin
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    // Jika tidak, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>
<!-- Admin Dashboard - SIAKAD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SIAKAD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="admin.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> Manage Applications</a></li>
        <li><a href="#"><i class="fas fa-history"></i> View Login History</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    <div class="user-info">
        Connected as Admin
    </div>
</div>

<div class="main-content">
    <div class="container">
        <h1>Welcome To SIAKAD Admin Dashboard!</h1>
        <p>You are logged in as an administrator.</p>
    </div>

    <!-- Profile Summary Section for Admin -->
    <div class="profile-summary">
        <h2>Profile Summary</h2>
        <p>Name: Admin</p>
        <p>Role: Administrator</p>
        <p>Email: admin@example.com</p>
    </div>

    <!-- Announcements Section -->
    <div class="announcements">
        <h2>Announcements</h2>
        <ul>
            <li>Important system update scheduled for tomorrow.</li>
            <li>New features added to the admin panel.</li>
            <li>Training session for admins next week.</li>
        </ul>
    </div>

    <!-- Quick Links Section for Admin -->
    <div class="quick-links">
        <h2>Quick Links</h2>
        <ul>
            <li><a href="#">View User Applications</a></li>
            <li><a href="#">Manage Users</a></li>
            <li><a href="#">View Reports</a></li>
        </ul>
    </div>

    <!-- Admin Actions Section -->
    <div class="admin-actions">
    <h2>Admin Actions</h2>
    <a href="viewcourse.php" >Lihat Data</a>
    <a href="mata_kuliah.php" >Add Data Mata Kuliah</a>
    <a href="jadwal_kuliah.php" >Add Data Jadwal Kuliah</a>
    </div>


    <!-- Support Section -->
    <div class="support">
        <h2>Support</h2>
        <p>If you need help, please contact us at <a href="mailto:support@siakad.com">support@siakad.com</a>.</p>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 SIAKAD. All rights reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> | 
            <a href="#">Terms of Service</a> | 
            <a href="#">Contact Us</a>
        </p>
    </div>
</footer>

<script src="welcome.js"></script>

</body>
</html>
