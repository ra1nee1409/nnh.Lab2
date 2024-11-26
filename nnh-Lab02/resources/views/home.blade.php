<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product h3 {
            margin: 0.5rem 0;
        }

        .product p {
            color: #666;
            font-size: 0.9rem;
        }

        .product .price {
            color: #333;
            font-weight: bold;
            margin: 0.5rem 0;
        }

        .product button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .product button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>Basic Shop</h1>
    </header>
    <div class="container">
        <div class="product">
            <img src="https://via.placeholder.com/200" alt="Product 1">
            <h3>Product 1</h3>
            <p>High-quality product with great features.</p>
            <div class="price">$25.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/200" alt="Product 2">
            <h3>Product 2</h3>
            <p>Another amazing product you'll love.</p>
            <div class="price">$35.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/200" alt="Product 3">
            <h3>Product 3</h3>
            <p>A must-have product for your needs.</p>
            <div class="price">$45.00</div>
            <button>Add to Cart</button>
        </div>
    </div>
</body>
</html>
