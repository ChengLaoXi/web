<?php 
$pageTitle = "Home";
include('includes/header.php'); 
?>

<?php 
include('includes/footer.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Cart - Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .hero {
            background: url('https://www.motortrend.com/uploads/2023/09/American-Honda-Museum-14.png') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
        }

        .hero h2 {
            font-size: 3rem;
            margin: 0;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .featured {
            padding: 2rem;
            text-align: center;
        }

        .featured h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            padding: 1rem;
        }

        .car-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .car-item:hover {
            transform: scale(1.05);
        }

        .car-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .car-item h3 {
            margin: 0.5rem 0;
        }

        .car-item p {
            margin: 0.5rem;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Auto Cart</h1>
        <p>Your ultimate destination for cars</p>
    </header>

    <div class="hero">
        <div>
            <h2>Find Your Dream Car Today</h2>
            <p>Discover the perfect car for your lifestyle with Auto Cart.</p>
        </div>
    </div>

    <section class="featured">
        <h2>Featured Cars</h2>
        <div class="car-grid">
            <a href="car1.html" class="car-item">
                <img src="https://cdn.dealeraccelerate.com/rkm/1/7139/453966/790x1024/2018-ford-shelby-mustang-gt350r" alt="Car 1">
                <h3>Mustang</h3>
                <p>Price: ₱1,200,000</p>
            </a>
            <a href="car2.html" class="car-item">
                <img src="https://di-uploads-pod3.dealerinspire.com/championauto/uploads/2022/03/2022-Dodge-Charger.png" alt="Car 2">
                <h3>Dodge Charger</h3>
                <p>Price: ₱1,250,000</p>
            </a>
            <a href="car3.html" class="car-item">
                <img src="https://pngimg.com/d/nissan_PNG5.png" alt="Car 3">
                <h3>GT-R</h3>
                <p>Price: ₱1,500,000</p>
            </a>
        </div>
        
    <div style="text-align: center; margin-top: 2rem;">
        <a href="cars.php" class="btn-link">
            <button style="padding: 10px 20px; font-size: 1rem; background-color: #2c3e50; color: white; border: none; border-radius: 5px;">
                More Cars
            </button>
        </a>
    </div>
    </section>

    <footer>
        <p>&copy; 2024 Auto Cart. All rights reserved.</p>
    </footer>
</body>
</html>
