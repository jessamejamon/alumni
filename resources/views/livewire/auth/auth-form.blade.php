
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of Profiling </title>
    <link rel="stylesheet" text="text/css "href="first form.css">

</head>
<style>
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin-left: 250px;
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

    .container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: khaki(10, 10, 10);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    header {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .logo {
        width: 100px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .fields {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    .input_fields {
        flex: 1 1 300px;
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="email"], input[type="date"], input[type="number"], input[type="phone"], select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    input[type="submit"], .btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        margin: 10px 0;
    }

    input[type="submit"]:hover, .btn:hover {
        background-color: #0056b3;
    }

    .title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .details {
        font-size: 14px;
        font-weight: normal;
    }

    select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .card-box {
        flex: 1 1 30%;
        margin-bottom: 15px;
    }
    .card-box span.details {
        font-weight: bold; 
       
    }
</style>

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

    <div class="container">
        <header style="text-align: center;">Alumni Profiling Form</header>
        
        <form action="" name="form" method="post">
        <input type="hidden" name="personal" value="1" />
            <!--first Form-->
            <div class="forms first">
                <div class="details personal">
                    <span class="title"><center>Personal Details</center></span><br>

                    <div class="fields">
                        <div class="input_fields">
                            <label>Full Name</label>
                            <input type="text" name="Name" placeholder="Surname, First name, Middle name" required>
                            
                    </div>
                    
                    <div class="input_fields">
                            <label>Permanent Address</label>
                            <input type="text" name="Address" placeholder="Enter your address" required>
                    </div>

                    <div class="input_fields">
                            <label>Email</label>
                            <input type="email" name="Email" placeholder="Enter Email" required>
                    </div>
                    <div class="input_fields">
                            <label>LRN</label>
                            <input type="text" name="LRN" placeholder="Enter LRN" required>
                    </div>
                        <div class="input_fields">
                            <label>Section</i></label>
                            <input type="text" name="section" placeholder="Enter your section" >
                    </div>
                    
                    <div class="input_fields">
                            <label>Birthday</label>
                            <input type="date" name="Birthday" placeholder="Enter birth of date" required>
                    </div>
                    <div class="input_fields">
                            <label>Birthplace</label>
                            <input type="text" name="Birthplace" placeholder="Enter Birthplace" required>
                    </div>
                        <div class="input_fields">
                            <label>Age</label>
                            <input type="number" name="Age" placeholder="Enter your Age" required>
                    </div>
                    
                    <div class="input_fields">
                            <label>Citizenship</label>
                            <input type="text" name="Citizenship" placeholder="Enter your Citizenship" required>
                    </div>
                    <div class="input_fields">
                            <label>Contact Number</label>
                            <input type="phone" name="Phone" placeholder="Enter phone number" required>
                    </div>
                    </div>

                    <div class="input_fields">
                     <div class="card-box">
                        <span class="details">Civil Status:</span><br>
                        <select class="option" name="Civil_Status" required>
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Separated</option>
                            <option>Widowed</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="card-box">
                        <span class="details">Gender:</span><br>
                        <select class="option" name="Gender" required>
                            <option disabled="disabled" selected="selected">--Choose Option</option>
                            <option>Male</option>
                            <option>Female </option>
                            <option>Others</option>other
                        </select>
                    </div>
                    <div class="card-box">
                        <span class="details">Religion</span><br>
                        <input type="text" name="Religion" placeholder="Enter Religion" required>
                </div> 
                </div>
                 </div>
             </div>
             <span class="title"><center>Educational Background</center></span><br>
                <!--Elementary-->
                <input type="hidden" name="elementary" value="1" />
                <div class="fields">
                    <div class="input_fields">
                        <label><b><u>ELEMENTARY</u></b></label>
                        <input type="text" name="Name_of_School_E" placeholder="Enter Name of School" required>
                </div>
                
                <div class="input_fields">
                        <label>GRADE LEVEL OF ACCOMPLISH</label>
                        <input type="text" name="Grade level" placeholder="Enter Grade level" required>
                </div>

                <div class="input_fields">
                        <label>YEAR GRADUATED</label>
                        <input type="text" name="Year_Graduated_E" placeholder="Enter year graduated" required>
                </div> 
                <div class="input_fields">
                        <label>SECTION</label>
                        <input type="text" name="Section" placeholder="Enter year section" required>
                </div> 
                <div class="input_fields">
                    <label>ACADEMIC HONORS RECIEVED</label>
                    <input type="text" name="Academic_Honors_E" placeholder="Enter academic honors recieved" required>
            </div>
        </div>

       <!---THIRD FORM-->
       <span class="title"><center>Family Background</center></span><br>
                    <!--Fathers Name-->
                    <div class="fields">
                        <div class="input_fields">
                        <input type="hidden" name="Father" value="1" />
                            <label><b><u>Father's Name</u></b></label>
                            <input type="text" name="Father_Name" placeholder="Surname, First name, Middle name" required>
                    </div>
                    
                    <div class="input_fields">
                            <label>Contact No.</label>
                            <input type="text" name="Contact number" placeholder="Enter Contact number" required>
                    </div>

                    <div class="input_fields">
                            <label>Occupation</label>
                            <input type="text" name="Work_Details_F" placeholder="Enter Work Details" required>
                    </div>
                    <div class="input_fields">
                            <label>Income</label>
                            <input type="number" name="Income_F" placeholder="Enter Income">
                    </div>
                    </div>
                    <!--Mothers Name-->
                    <div class="fields">
                        <div class="input_fields">
                        <input type="hidden" name="Mother" value="1" />
                            <label><b><u>Mother's Name</u></b></label>
                            <input type="text"   name="Mother_Name" placeholder="Surname, First name, Middle name" required>
                    </div>
                    
                    <div class="input_fields">
                            <label>Contact No.</label>
                            <input type="text" name="Contac number" placeholder="Enter Contact number" required>
                    </div>

                    <div class="input_fields">
                            <label>Occupation</label>
                            <input type="text" name="Work_Details_M" placeholder="Enter Work Details" required>
                    </div>
                    <div class="input_fields">
                            <label>Income</label>
                            <input type="number" name="Income_M" placeholder="Enter Income">
                    </div>
                    </div>
                         
                    <a href="{{ route('dashboard') }}"class="btn">Back</a> 
                    <a href=""class="btn">Submit</a> 

         </div>
    </div>
</form>

</body>
</html>