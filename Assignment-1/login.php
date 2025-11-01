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

  <br>

  <!-- Pizza Selection -->
  <fieldset>
    <legend>Pizza Details</legend>

    <label for="quantity">Number of Pizzas:</label><br>
    <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" required><br><br>

    <label for="size">Size:</label><br>
    <select id="size" name="size">
      <option value="6">Small (6 slices)</option>
      <option value="8" selected>Medium (8 slices)</option>
      <option value="10">Large (10 slices)</option>
      <option value="12">Extra Large (12 slices)</option>
    </select><br><br>

    <label>Shape:</label><br>
    <input type="radio" id="round" name="shape" value="Round" checked>
    <label for="round">Round</label>
    <input type="radio" id="square" name="shape" value="Square">
    <label for="square">Square</label><br><br>

    <label>Crust Type:</label><br>
    <input type="radio" id="thin" name="crust" value="Thin Crust" checked>
    <label for="thin">Thin Crust</label>
    <input type="radio" id="deep" name="crust" value="Deep Dish">
    <label for="deep">Deep Dish</label>
    <input type="radio" id="stuffed" name="crust" value="Stuffed Crust">
    <label for="stuffed">Stuffed Crust</label><br><br>

    <label>Toppings (choose as many as you like):</label><br>
    <input type="checkbox" id="pepperoni" name="toppings[]" value="Pepperoni">
    <label for="pepperoni">Pepperoni</label>

    <input type="checkbox" id="mushrooms" name="toppings[]" value="Mushrooms">
    <label for="mushrooms">Mushrooms</label>

    <input type="checkbox" id="onions" name="toppings[]" value="Onions">
    <label for="onions">Onions</label>

    <input type="checkbox" id="peppers" name="toppings[]" value="Peppers">
    <label for="peppers">Peppers</label>

    <input type="checkbox" id="olives" name="toppings[]" value="Olives">
    <label for="olives">Olives</label>

    <input type="checkbox" id="bacon" name="toppings[]" value="Bacon">
    <label for="bacon">Bacon</label><br><br>

    <label for="specialInstructions">Special Instructions:</label><br>
    <textarea id="specialInstructions" name="specialInstructions" rows="3" placeholder="Extra cheese, no salt, gluten-free crust..."></textarea>
  </fieldset>

  <br>

  <!-- Order Type -->
  <fieldset>
    <legend>Order Type</legend>
    <input type="radio" id="takeout" name="orderType" value="Takeout" checked>
    <label for="takeout">Takeout</label>

    <input type="radio" id="delivery" name="orderType" value="Delivery">
    <label for="delivery">Delivery</label>

    <input type="radio" id="eatIn" name="orderType" value="Eat-in">
    <label for="eatIn">Eat-in</label>
  </fieldset>

  <br>

  <!-- Submit/Reset -->
  <fieldset>
    <legend>Complete Your Order</legend>
    <button type="submit" value="Place Order"></button><button type="reset" value="Reset Form"></button>
   
  </fieldset>

</form>
</main>

 <footer class="footer">
  
      <h3><strong>ARAM' PIZZA PIZZERIA</strong></h3>
      <p>The authentic fusion of Italy and France in every bite. Fresh ingredients, artisanal dough, and a flavor that will win you over.</p>
    

   
      <h4><strong>Contact</strong></h4>
      <p>📍 123 Maple Avenue, Toronto, ON, Canada</p>
      <p>📞 +1 (416) 555-2742</p>
      <p>📧 info@arampizza.ca</p>
      
    
      <h4><strong>Schedule</strong></h4>
      <p>Monday - Friday: 10:00 - 20:00</p>
      <p>Saturday - Sunday: 9:00 - 23:00</p>
   

    
      <h4><strong>Follow Us</strong></h4>
      <a href="https://www.facebook.com/samuel.segurauvidia/videos/922348928360082/"class="social-link">Facebook</a>|
        
      <a href="https://www.instagram.com/ron_alejandria/?next=%2F" class="social-link">Instagram</a>
    
    <p>Disclaimer (pricing, availability, nutrition licenses)</p>

 
    <p lang="fr">© 2025 ARAM' PIZZA PIZZERIA — Tradizione Italiana & Saveur Française</p>
  
</footer>
</body>
</html>