 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Pizzeria" content="Info about ARAM' PIZZA PIZZERIA and options to order pizza online">
        <link rel="icon" href="images/aram-pizza-icon.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="css/stylish.css" />
        <title>ARAM' PIZZA PIZZERIA</title>
    </head>
        <body>
            <header>
                <img src="images/aram-pizza-icon.jpg" height="75" width="75" alt="ARAM' PIZZA PIZZERIA Logo" />
            <h1>Design your favorite pizza!</h1>
            </header>

            <main>
                <form action="order-confirmation.php" method="post" id="pizzaOrderForm" class="pizza-form">

  <h2>🍕 Order Your Pizza from ARAM' PIZZA PIZZERIA</h2>
  <p>Please fill out the form below to customize your order. We’ll make it hot, fresh, and delicious!</p>

  <!-- Customer Information -->
  <fieldset>
    <legend>Customer Information</legend>

    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name" placeholder="Enter your full name" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" placeholder="+1 (___) ___-____" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" placeholder="you@example.com" required><br><br>

    <label for="address">Delivery Address:</label><br>
    <textarea id="address" name="address" rows="3" placeholder="Street, City, Postal Code" required></textarea>
  </fieldset>

  