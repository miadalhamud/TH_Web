<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Center</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <style>
    body {
        width:100%;
        background-color:  #E3E6F3;
    }

    .inf {
        margin-top: 3%;
    }

    h3 {
        margin-left: 5%;
    }

    p,
    ul {
        margin-left: 7%;
        text-align: left;
    }

    h1 {
        margin-left: 5%;
        margin-bottom: 2%;
    }

    .lin {
        background-color: #E3E6F3;
        padding: 10px 10px;
        width: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    }

    a {
        color: #1a1a1a;
        margin: 2%;
        text-decoration: none;
        font-size: 18px;
        font-weight: 400;
        position: relative;
    }

    a:hover,
    a.active {
        color: #088178;
    }

    a.active::after,
    a:hover::after {
        content: "";
        width: 55%;
        height: 1.4px;
        background: #088178;
        position: absolute;
        bottom: -4px;
        left: -1px;
    }
    </style>
</head>

<body>
    <div class="lin">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a class="active" href="/contact">Contact</a>
    </div>
    <div class ="inf">
        <h1>Contact Us</h1>
        <h3>Phone:</h3>
        <p>+966 50 123 4567</p>
        <h3>Email:</h3>
        <p>contact@alnoorhealth.com</p>
        <h3>Working Hours:</h3>
        <ul>
            <li>Sunday – Thursday: 8:00 AM – 10:00 PM</li>
            <li>Friday: Closed</li>
            <li>Saturday: 2:00 PM – 8:00 PM</li>
        </ul>
    </div>
</body>

</html>