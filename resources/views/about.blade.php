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
        width: 100%;
        background-color: #E3E6F3;
    }

    .his {
        margin-left: 5%;
        margin-top: 3%;
    }
     p {
         line-height: 0.6;
     }
h1 {
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
        <a class="active" href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>
    <div class="his">
        <h1>Our History</h1>
        <p>Founded in 2018, Al Noor Health Center has been dedicated to providing top-tier medical services to the
            community.</p>
        <p>What started as a small clinic has grown into a full-service medical center, offering specialized care
            across various medical fields.</p>
    </div>

</body>

</html>