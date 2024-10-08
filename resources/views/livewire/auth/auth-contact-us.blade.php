<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        body {
            background-color: khaki;
        }

        .contact .content {
            max-width: 800px;
            text-align: center;
        }

        .contact .content h2 {
            font-size: 36px;
            font-weight: 500;
            color: black;
        }  

        .contact .content p {
            font-weight: 300;
            color: black;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .container .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .container .contactInfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
            align-items: center;
        }

        .container .contactInfo .box .icon {
            min-width: 30px;
            height: 60px;
            background: gray;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 20px;
            padding: 20px;
        }

        .container .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }

        .container .contactInfo .box .text h3 {
            font-weight: 500;
            color: black;
        }

        .contactForm {
            width: 40%;
            padding: 40px;
            background: gray;
        }

        .contactForm h2 {
            font-size: 30px;
            color: black;
            font-weight: 500;
        }

        .contactForm .inputBox {
            position: relative;
            width: 100%;
            margin-top: 5px;
        }

        .contactForm .inputBox input,
        .contactForm .inputBox textarea {
            width: 100%;
            padding: 7px 0;
            font-size: 15px;
            margin: 5px 0;
            border: none;
            border-bottom: 1px solid #333;
            outline: none;
            resize: none;
        }

        .contactForm .inputBox label {
            font-size: 15px;
            color: black;
            margin-bottom: 5px;
            display: block;
        }

        .contactForm .inputBox span {
            position: absolute;
            left: 5;
            padding: 7px 0;
            font-size: 15px;
            margin: 5px 0;
        }

        .contactForm .inputBox input[type="submit"] {
            width: 100px;
            background: #00bcd4;
            color: #ffff;
            border: 3px black;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }

        /* Styling for Back to Homepage Button */
        .back-btn {
            display: inline-block;
            background-color: light;
            color: light;
            padding: 5px 10px;
            border-radius: 2px;
            text-decoration: none;
            margin-top: 20px; /* Adjusted to align with the other sections */
            border: 2px solid black;
            transition: 0.4s ease;
            width: 20%; /* Make the button the same width as the other contact boxes */
            text-align: center; /* Center the text inside the button */
        }

        .back-btn:hover {
            background-color: darkred;
            border: 1px solid white;
        }
    </style>
</head>
<body>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Feel free to contact us with any inquiries, suggestions, or concerns. 
                We value your input and strive to provide excellent service.</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class='bx bxs-map'></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>H.Vargas St<br>Sogod Simamla,<br>Virac Catanduanes</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class='bx bxs-phone'></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>09155663748</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class='bx bxs-envelope'></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>jessamejamon@gmail.com</p>
                    </div>
                </div>

                <!-- Back to Homepage Button -->
                <a href="{{ route('dashboard') }}" class="back-btn">Back</a>

            </div>
        </div>
    </section>

</body>
</html>
