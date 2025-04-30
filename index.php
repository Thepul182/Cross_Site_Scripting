<?php include 'includes/header.php'; ?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
        font-family: Arial, sans-serif;
    }
    header {
        background-color: white;
        padding: 15px 20px;
        border-bottom: 3px solid red;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        font-size: 24px;
        color: black;
    }
    .left-icon, .right-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
    }
    .left-icon {
        left: 20px;
    }
    .right-icon {
        right: 20px;
    }
    .logo-text {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .container {
        max-width: 1000px;
        margin: 40px auto;
        display: flex;
        flex-direction: column;
        gap: 40px;
        padding: 0 20px;
    }
    .card {
        display: flex;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 12px;
        overflow: hidden;
    }
    .card img {
        width: 300px;
        object-fit: cover;
    }
    .card-content {
        padding: 20px;
        flex: 1;
    }
    .card-content h2 {
        margin-top: 0;
        font-size: 20px;
        color: #333;
    }
    .card-content p {
        color: #555;
        font-size: 16px;
    }
    .read-more {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 12px;
        background-color: red;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
    }
</style>

<header>
    <div class="left-icon">🚨</div>
    <div class="logo-text">🪲 <span>Hack Study</span></div>
    <div class="right-icon">🔏</div>
</header>

<div class="container">
    <div class="card">
        <img src="https://thesmartlocal.ph/wp-content/uploads/2020/07/image5-min.png" alt="Kayangan Lake">
        <div class="card-content">
            <h2>Kayangan Lake, Palawan</h2>
            <p>
                The image shows a scenic view of Kayangan Lake in Coron, Palawan, Philippines.
                Crystal-clear turquoise water is surrounded by towering limestone cliffs covered in lush greenery...
            </p>
            <a href="article1.php" class="read-more">Read More</a>
        </div>
    </div>

    <div class="card">
        <img src="https://img.freepik.com/premium-photo/pixelated-coding-carnival_1029476-196706.jpg?w=996" alt="Coding Confetti Carnival">
        <div class="card-content">
            <h2>Coding Confetti Carnival</h2>
            <p>
                The image titled "Coding Confetti Carnival" is a vibrant, AI-generated digital artwork that fuses retro pixel art with a festive coding theme...
            </p>
            <a href="article2.php" class="read-more">Read More</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>