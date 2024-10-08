<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Events</title>
    <link rel="stylesheet" href="styles.css">
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
        }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    
    header {
        background: #007BFF;
        color: white;
        padding: 10px 0;
        text-align: center;
    }
    
    h1 {
        margin: 0;
    }
    
    main {
        padding: 20px;
        margin-left: 250px; /* Adjusted margin to move main content right */
    }
    
    .event {
        background: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 10px 0;
        padding: 15px;
    }
    
    h2 {
        color: #007BFF;
    }
    
    footer {
        text-align: center;
        padding: 10px 0;
        background: #007BFF;
        color: white;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    /* Back button styles */
    .back-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .back-button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <header>
        <h1>Upcoming Alumni Events</h1>
    </header>
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
    <main>
        <section class="event">
            <h2>Annual Alumni Reunion</h2>
            <p>Date: August 25, 2025</p>
            <p>Location: Simamla Proprer School Ground</p>
            <p>Description: Join us for a day of networking, fun activities, and reconnecting with old friends.</p>
        </section>
        <section class="event">
            <h2>Career Development Workshop</h2>
            <p>Date: September 15, 2025</p>
            <p>Location: Online</p>
            <p>Description: Enhance your skills with our expert-led workshops designed for career advancement.</p>
        </section>
        <section class="event">
            <h2>Guest Speaker Series</h2>
            <p>Date: December 21, 2025</p>
            <p>Location: Simamla Proprer School Ground</p>
            <p>Description: Attend insightful talks from successful alumni sharing their career journeys.</p>
        </section>
        
        <a href="javascript:history.back()" class="back-button">Back</a>
    </main>
</body>
</html>
<div>