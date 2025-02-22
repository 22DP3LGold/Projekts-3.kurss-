<?php
$pageTitle = "NaudasDievs"; // Dynamic page title
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="{{ mix('css/welcome.css') }}">
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">NaudasDievs</a>
        <div class="nav-links">
            <a href="#">Apraksts</a>
            <a href="#">Kontakti</a>
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn" id="registerBtn">Register</a>
        </div>
    </div>

    
    <div class="main-content">
        <h1>SVEICINĀTI!</h1>
        <p>
            Vienīgais budžeta plānošanas rīks, kas nepieciešams jebkuram cilvēkam, lai sasniegtu finansiālo brīvību!
        </p>
        <div class="cta-buttons">
            <a href="#" class="btn">Uzzināt vairāk</a>
            <a href="#" class="btn">Sākt plānot</a>
        </div>
    </div>

    
    <div class="footer">
        <p>&copy; 2025 NaudasDievs. Visas tiesības rezervētas. | <a href="#">Privātuma politika</a></p>
    </div>

    
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Reģistrācija</h2>

            <form method="POST" action="{{ route('RegsaveItem') }}"> 
                {{ csrf_field() }}
                <div class="registration-form">
                    <input type="text" name="name" placeholder="Vārds">
                    <input type="text" name="surname" placeholder="Uzvārds">
                    <input type="email" name="email" placeholder="E-pasts">
                    <button type="submit">Reģistrēties</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/welcome.js') }}"></script>
</body>
</html>