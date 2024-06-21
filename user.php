<?php
session_start();

// Cek apakah pengguna telah login dan memiliki peran user
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    // Jika tidak, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - SIAKAD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="welcome.css?v=<?php echo time();?>">
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="user.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> Your applications</a></li>
        <li><a href="#"><i class="fas fa-history"></i> Login history</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
    <div class="user-info">
        Connected as 230103136
    </div>
</div>

<div class="main-content">
    <div class="container">
        <h1>Welcome To SIAKAD, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>!</h1>
        <p>You have successfully logged in as <?php echo isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?>.</p>
    </div>

    <!-- Profile Summary Section -->
    <div class="profile-summary">
        <h2>Profile Summary</h2>
        <p>Name: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
        <p>Role: <?php echo isset($_SESSION['role']) ? $_SESSION['role'] : ''; ?></p>
        <p>Email: student@example.com</p>
    </div>

    <!-- Announcements Section -->
    <div class="announcements">
        <h2>Announcements</h2>
        <ul>
            <li>Midterm exams will start on July 1st.</li>
            <li>New library resources are available online.</li>
            <li>Registration for the summer semester is open now.</li>
        </ul>
    </div>

    <!-- Quick Links Section -->
    <div class="quick-links">
        <h2>Quick Links</h2>
        <ul>
            <li><a href="#">Academic Calendar</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Student Services</a></li>
            <li><a href="#">IT Support</a></li>
        </ul>
    </div>

    <div class="feature-section">
        <h2>Sistem UDB</h2>
        <div class="features">
            <div class="feature">
                <a href="#">
                    <img src="star-icon.png" alt="Mahasiswa">
                    <p>Mahasiswa<br><span>Sistem Mahasiswa</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="penguin-icon.png" alt="KKN">
                    <p>KKN<br><span>Sistem Informasi KKN</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="search-icon.png" alt="PJM">
                    <p>PJM<br><span>Penjaminan Mutu</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="E-Learning">
                    <p>E-Learning<br><span>Elearning UDB</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="MBKM">
                    <p>MBKM<br><span>Merdeka Belajar Kampus</span></p>
                </a>
            </div>
        </div>
    </div>

    <div class="feature-section">
        <h2>Portal UDB</h2>
        <div class="features">
            <div class="feature">
                <a href="#">
                    <img src="life-ring-icon.png" alt="udb.ac.id">
                    <p>udb.ac.id<br><span>Portal UDB</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="FHB">
                    <p>FHB<br><span>Fakultas</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="OJS">
                    <p>OJS<br><span>Journal</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="FIKOM">
                    <p>FIKOM<br><span>Fakultas</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="FST">
                    <p>FST<br><span>Fakultas</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="FIKES">
                    <p>FIKES<br><span>Fakultas</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="Digilib">
                    <p>Digilib<br><span>Digital Library</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="OCS">
                    <p>OCS<br><span>Conference</span></p>
                </a>
            </div>
            <div class="feature">
                <a href="#">
                    <img src="globe-icon.png" alt="Alumni">
                    <p>Alumni<br><span>Karir & Tracer Study</span></p>
                </a>
            </div>
        </div>
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
