<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Us</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>We'd love to hear from you!</h2>
        <form method="POST" action="contact.php">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Untuk tujuan demo, kita akan menyimpan pesan di file teks
    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n\n");
    fclose($file);

    echo "<p>Thank you, your message has been sent!</p>";
}
?>

            <label>Name:</label><br>
            <input type="text" name="name" required><br><br>
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>
            <label>Message:</label><br>
            <textarea name="message" required></textarea><br><br>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>
        <p>Product Marketing Website &copy; 2024</p>
    </footer>
</body>
</html>
