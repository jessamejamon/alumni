<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profiling Form Homepage</title>
    <link rel="stylesheet" type="text/css" href="style/homepage.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Century Gothic', sans-serif;
        }
        
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.893), rgba(0, 0, 0, 0.548)), url('IMG_20240912_124507.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
            min-height: 100px;
        }
        
        ul {
            float: right;
            list-style-type: none;
            margin-top: 30px;
            margin-right: 60px;
        }
        
        ul li {
            display: inline-block;
        }
        
        ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.5s ease;
        }
        
        .about-us, .contact-us {
            border: none; /* Removes the border */
        }
        
        ul li a:hover {
            background-color: #fff;
            color: #000;
        }
        
        ul li.active a {
            background-color: #fff;
            color: #000;
        }
        
        .logo img {
            float: left;
            width: 90px;
            height: 90px;
            border-radius: 50%;
        }
        
        .logo p {
            padding-top: 30px;
            padding-left: 100px;
            color: #fff;
        }
        
        .main {
            max-width: 1200px;
            margin: auto;
        }
        
        .title {
            padding-top: 150px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .title h1 {
            color: #fff;
            font-size: 50px;
        }
        
        .button {
            position: absolute;
            top: 70%; /* Adjusted to position it lower */
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center; /* Center text within the button container */
        }
        
        .btn {
            border: 2px solid #fff;
            padding: 15px 30px; /* Increased padding for a larger button */
            color: #fff;
            background-color: rgba(0, 45, 117, 0.7); /* Slightly transparent background */
            transition: 0.6s ease;
            font-size: 20px; /* Increased font size */
            text-decoration: none;
            border-radius: 5px; /* Rounded corners */
            display: inline-block; /* Ensures padding works correctly */
        }
        
        .btn:hover {
            background-color: #fff;
            color: #000;
        }
        
        .main ul li:hover .sub-menu {
            display: block;
            position: absolute;
            background-color: rgb(0, 45, 117);
            margin-top: 12px;
            margin-left: -8px;
        }
        
        .main ul li:hover .sub-menu ul {
            display: block;
            margin: 6px;
        }
        
        .main ul li:hover .sub-menu ul li {
            width: 75px;
            padding: 5px;
            border-bottom: 1px solid #fff;
            background: transparent;
            transition: 0.4s ease;
            text-align: left;
        }
        
        .main ul li:hover .sub-menu ul li:last-child {
            border-bottom: none;
        }
        
        footer {
            height: 50vh;
        }
        
        .intro {
            background: #ffffffab;
            padding: 60px 30px;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.5;
            text-align: center;
        }
        
        .intro p {
            font-size: 17px;
        }
        
        .intro h5 {
            padding-top: 5px;
            font-size: 16px;
        }
        
        .intro h4 {
            padding-top: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src='1726039601910.jpg' alt="School Logo">
                <p><b>SIMAMLA ELEMENTARY SCHOOL</b></p>
            </div>
        </div>
        <div class="title">
            <h1>ALUMNI PROFILING<br>SYSTEM</h1>
        </div>
        <div class="button">
            <a href="{{ route('dashboard') }}"class="btn">USER</a>
        </div>
    </header>
</body>
</html>
