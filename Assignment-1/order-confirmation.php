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
            <h1>Complete order</h1>
            </header>

                <h2>Your ARAM' PIZZA PIZZERIA Order Confirmation</h2>

<?php
// Get the data from the POST request
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$quantity = $_POST["quantity"];
$size = $_POST["size"];
$shape = $_POST["shape"];
$crust = $_POST["crust"];
$orderType = $_POST["orderType"];
$toppings = isset($_POST["toppings"]) ? $_POST["toppings"] : [];
$special = $_POST["specialInstructions"];

// Display confirmation message
echo("<p>Thank you, <strong>$name</strong>! Your order has been received successfully.</p>");
echo("<p>We’ll contact you shortly at <strong>$phone</strong> or <strong>$email</strong> to confirm your order.</p>");

echo("<h3>Order Summary:</h3>");
echo("<ul>");
echo("<li><strong>Number of Pizzas:</strong> $quantity</li>");
echo("<li><strong>Size:</strong> $size slices</li>");
echo("<li><strong>Shape:</strong> $shape</li>");
echo("<li><strong>Crust Type:</strong> $crust</li>");
echo("<li><strong>Order Type:</strong> $orderType</li>");
echo("</ul>");

if (!empty($toppings)) {
    echo("<p><strong>Toppings Selected:</strong></p><ul>");
    foreach ($toppings as $item) {
        echo("<li>$item</li>");
    }
    echo("</ul>");
} else {
    echo("<p><strong>Toppings Selected:</strong> None</p>");
}

if (!empty($special)) {
    echo("<p><strong>Special Instructions:</strong> $special</p>");
}

echo("<p><strong>Delivery Address:</strong> $address</p>");
?>
<button onclick="window.location.href='index.html';">Return to Home</button>

<?php include("footer.php"); ?>
</body>
</html>