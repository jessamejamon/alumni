<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementary Alumni System Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 230px;
            height: 100%;
            background-color: #172a3a;
            color: white;
            padding-top: 20px;
        }

        .sidebar .admin-info {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        /* Admin avatar as a figure (orange) */
        .admin-info .admin-avatar {
            width: 200px;
            height: 55px;
            background-color: #FF9800; /* Orange background */
            border-radius: 30px; /* Add a larger radius for an oblong shape */
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 19px; /* Font size for "Admin" text */
        }

        .sidebar .admin-info p {
            margin-top: 10px;
            font-size: 16px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 20px;
        }

        /* Sidebar Icons and List Styling */
        .sidebar ul li {
            padding: 10px 15px;
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease-in-out;
        }

        .sidebar ul li a {
            color: #b0c7d5;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar ul li:hover {
            background-color: #1d2a36;
        }

        .sidebar ul li i {
            font-size: 18px;
            margin-right: 10px;
            color: white; /* Icon color */
        }

        .sidebar ul li a:hover {
            color: white;  
        }

        .dashboard-icon::before {
            content: '🎨'; /* Icon for Dashboard */
        }

        .form-icon::before {
            content: '📝'; /* Icon for Form */
        }

        .events-icon::before {
            content: '🎉'; /* Icon for Events */
        }

        .group-icon::before {
            content: '👥'; /* Icon for About Us */
        }

        .contact-icon::before {
            content: '📞'; /* Icon for Contact Us */
        }

        /* Navbar Styling */
        .navbar {
            background-color: #243545;
            padding: 10px;
            position: fixed;
            width: calc(100% - 230px);
            left: 230px;
            top: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        /* Hamburger menu */
        .navbar .navbar-left {
            display: flex;
            align-items: center;
        }

        .navbar .navbar-left .hamburger {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .navbar .navbar-left .hamburger div {
            height: 4px;
            background-color: #FF9800;
            border-radius: 2px;
        }

        /* Admin Figure */
        .navbar .admin-avatar {
            width: 100px;
            height: 50px;
            background-color: #FF9800;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }

        .dashboard {
            margin-left: 230px;
            padding: 20px;
            margin-top: 60px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .dashboard .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            margin-bottom: 10px;
            font-size: 48px;
            font-weight: bold;
        }

        .card p {
            margin-bottom: 15px;
            font-size: 16px;
            color: #888;
        }

        .card .details-btn {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            text-decoration: none;
            border-radius: 5px;
            display: block;
            transition: background-color 0.3s;
        }

        .card .details-btn:hover {
            background-color: #0056b3;
        }

        .dashboard-section {
            padding: 10px;
            border-radius: 10px;
            background-color: #e0e7ff;
            margin: 10px 0;
            border-left: 5px solid #5E35B1;
        }

        .card .icon-background {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 48px;
            color: white;
            opacity: 0.2;
        }

        /* Card Colors */
        .card-1 {
            background: linear-gradient(to bottom right, #5E35B1, #6a67e2);
            color: white;
        }

        .card-2 {
            background-color: #FB8C00;
            color: white;
        }

        .card-3 {
            background-color: #FBC02D;
            color: white;
        }

        .card-4 {
            background-color: #43A047;
            color: white;
        }

        .card-5 {
            background-color: #D32F2F;
            color: white;
        }

        .card-6 {
            background-color: #FFB74D;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Single Root Element -->
    <div id="app">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="admin-info">
                <!-- Admin icon placeholder -->
                <div class="admin-avatar">
                    User
                </div>
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}"><i class="dashboard-icon"></i> Dashboard</a></li>
                <li><a href="{{ route('form') }}"><i class="form-icon"></i> Form</a></li>
                <li><a href="{{ route('events') }}"><i class="events-icon"></i> Events</a></li>
                <li><a href="{{ route('aboutus') }}"><i class="group-icon"></i> About Us</a></li>
                <li><a href="{{ route('contactus') }}"><i class="contact-icon"></i> Contact Us</a></li>
            </ul>
        </div>

        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-left">
                <!-- Hamburger Menu -->
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <h1>ELEMENTARY ALUMNI SYSTEM</h1>
            </div>
            <div class="navbar-right">
                <!-- Admin Avatar in Navbar -->
                <div class="admin-avatar">
                    <a href="{{ route('login') }}"><b>Logout</b></a>  
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard">
            <div class="title">Dashboard</div>
            <div class="cards">
                <div class="card card-1 dashboard-section">
                    <div class="icon-background">📄</div>
                    <h2>2</h2>
                    <p>Total Events</p>
                    <a href="#" class="details-btn">View Details</a>
                </div>
                <div class="card card-2 dashboard-section">
                    <div class="icon-background">📚</div>
                    <h2>6</h2>
                    <p>Total of Grade level</p>
                    <a href="#" class="details-btn">View Details</a>
                </div>
                <div class="card card-6 dashboard-section">
                    <div class="icon-background">🔧</div>
                    <h2>0</h2>
                    <p>Total Alumni</p>
                    <a href="#" class="details-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('.navbar-right .admin-avatar a').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent immediate navigation

            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to logout!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = this.href; // Proceed to logout
                }
            });
        });
    </script>

</body>
</html>
