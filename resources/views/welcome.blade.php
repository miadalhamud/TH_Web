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

    #wel {
        text-align: center;
        margin-top: 12%;
    }

    h1{
        padding-bottom: 2% ;
        font-size:35px;
    }

    p {
        font-size: 18px;

    }

    #lin {
        background-color: #E3E6F3;
        padding: 15px 10px;
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
    <section id="lin">
        <a class="active" href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </section>

    <section id="wel">
        <h1><strong>Welcome to</strong> Al Noor Health Center</h1>
        <p>We are committed to providing top-quality healthcare services with a focus on patient care and modern
            medical solutions.</p>
    </section>

</body>

</html>