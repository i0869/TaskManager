<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>online shopping</title>
    <link rel="stlyesheet" href="{{ asset('public/style.css') }}">
</head>

<body>
    <nav>
        <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/contact">Contact</a></li>
        </ol>
    </nav>
    <h1>Welcome to online shopping</h1>
    <p>Buy your favorite products online</p>
    <section id=home>
        <h2>Home</h2>
        <p>Having quality products</p>
    </section>
    <section id=products>
        <h2>Products</h2>
        <p>quality and demure products</p>
    </section>
    <div class="home-image">
        <img src="{{ asset('images/ritah.jpg') }}" alt="home">
    </div>
    <section id=contact>
        <form>
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
    <footer>
        <p>&copy;
            <?php
            echo now()->subYears()->format('Y');
            ?>
            online shopping</p>
    </footer>

</body>

</html>
