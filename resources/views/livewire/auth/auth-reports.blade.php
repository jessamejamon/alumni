<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profiling System Report</title>
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
        .report-icon::before {
            content: '📊'; /* Icon for Report */
        }
        .group-icon::before {
        content: '👥'; /* Icon for About Us */
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
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background: #35424a;
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
}

h1 {
    margin: 0;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 20px;
    background: #ffffff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #dddddd;
}

th {
    background-color: #35424a;
    color: white;
}

footer {
    text-align: center;
    padding: 10px 0;
    background: #35424a;
    color: #ffffff;
    position: relative;
    bottom: 0;
    width: 100%;
}

</style>
<body>
    <header>
        <h1>Alumni Profiling System Report</h1>
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
            <li><a href="#"><i class="report-icon"></i> Report</a></li>
            <li><a href="{{ route('aboutus') }}"><i class="group-icon"></i> About Us</a></li>

            </ul>
        </div>
    <main>
        <section>
            <h2>Alumni Overview</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Graduation Year</th>
                        <th>Grade Level</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Lim</td>
                        <td>1966</td>
                        <td>Grade 2</td>
                        <td>Gumamela</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>2001</td>
                        <td>Grade 6</td>
                        <td>Aguinaldo</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
<div>