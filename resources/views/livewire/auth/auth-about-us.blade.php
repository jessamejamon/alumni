
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        .report-icon::before {
            content: '📊'; /* Icon for Report */
        }
        .group-icon::before {
        content: '👥'; /* Icon for About Us */
        }
        .contact-icon::before {
            content: '📞';
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
        body {
            background-color: #f1f1f1;
        }
        .about-us {
            padding: 100px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .content-section {
            flex: 1;
            margin-left: 40px;
            transform: translateY(50px);
            animation: fadeIn 1s forwards;
            animation-delay: 0.5s;
        }
        .content-section h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }
        .content-section p {
            font-size: 16px;
            line-height: 1.6;
        }
        .content-section .btn,
        .content-section .back-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 12px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 15px;
            text-align: center;
            transition: 0.4s ease;
        }
        .content-section .btn {
            background-color: blue;
            color: #fff;
        }
        .content-section .btn:hover {
            background-color: blue;
        }
        .content-section .back-btn {
            background-color: red; 
            color: #fff; 
        }
        .content-section .back-btn:hover {
            background-color: darkred; 
        }
        .content-section h2.goal-heading {
            margin-top: 40px;
        }
        .content-section {
        flex: 1;
        margin: 0; /* Remove the left margin */
        text-align: center; /* Center the text */
        max-width: 800px; /* Limit the width of the content */
        margin-left: auto; /* Align to the right */
        margin-right: 20px; /* Center the section horizontally */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
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
    </div>
    <div class="navbar-right">
        <!-- Admin Avatar in Navbar -->
        <div class="admin-avatar">
        <a href="{{ route('homepage') }}"><b>Logout</b></a>  
        </div>
    </div>
</div>
<section class="about-us"> 
    <div class="content-section">
        <h2>About Us</h2>
        <p>
        Designed to gather valuable information from alumni, including their contact details, degree information, and contributions. Whether your graduates have completed their studies or are still in college, this form helps you stay connected. It’s easy to customize and embed on your website, making it convenient for alumni to register.
        </p>
        <h2 class="goal-heading">Our Goal</h2>
        <p>
        To maintain an up-to-date and comprehensive record of alumni, facilitating stronger connections between graduates and the institution. By centralizing alumni data, the system enhances networking, career support, and engagement opportunities, empowering both alumni and the institution to benefit from ongoing relationships and collaborations.
        </p>
        <a href="{{ route('dashboard') }}" class="back-btn">Back</a> 
    </div>

    <script>
        function toggleReadMore() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("readMoreBtn");
            var backBtn = document.getElementById("backBtn");

            if (moreText.style.display === "none" || moreText.style.display === "") {
                moreText.style.display = "inline"; 
                dots.style.display = "none"; 
                btnText.innerHTML = "Read Less"; 
                backBtn.style.display = "none"; 
            } else {
                moreText.style.display = "none"; 
                dots.style.display = "inline"; 
                btnText.innerHTML = "Read More"; 
                backBtn.style.display = "inline"; 
            }
        }
    </script>
</section>
</body>
</html>
