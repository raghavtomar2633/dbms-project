<!-- Contact Us Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- For icons -->
</head>
<body>
    <div class="contact-page">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>If you have any questions, feel free to contact us:</p>
            <ul>
                <li><i class="fas fa-phone"></i> +91 8375826511 , 9319916150</li>
                <li><i class="fas fa-envelope"></i> Kingsinn@company.com</li>
                <li><i class="fas fa-map-marker-alt"></i> 123 Company St, DELHI, INDIA</li>
            </ul>
            <div class="social-media">
                <a href="https://facebook.com/company" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/company" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com/company" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="contact-form">
            <h2>Contact Form</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
