<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h1 class="logo">Hotel Booking</h1>
            <a href="index.php" class="logout-icon"><i class="fas fa-sign-out-alt"></i></a>
        </nav>
    </header>
    <div class="container">
        <div class="hotel-types">
            <div class="hotel-type" id="standard">
                <img src="https://assets.langhamhotels.com/is/image/langhamhotelsstage/tljkt-deluxe-skyline:Medium?wid=760&hei=427" style="width: 240px;" alt="">
                <h2>Standard</h2>
                <p>Ease into your own private oasis featuring contemporary comforts and unobstructed views of Batam’s landscape.</p>
                <button onclick="book('standard')">Book Now</button>
            </div>
            <div class="hotel-type" id="deluxe">
                <img src="https://assets.langhamhotels.com/is/image/langhamhotelsstage/tljkt-executive-cityscape:Medium?wid=760&hei=427" style="width: 240px;" alt="">
                <h2>Deluxe</h2>
                <p>Delight in effortless elegance with this private luxury studio, boasting breathtaking views from every corner.</p>
                <button onclick="book('deluxe')">Book Now</button>
            </div>
            <div class="hotel-type" id="suite">
                <img src="https://assets.langhamhotels.com/is/image/langhamhotelsstage/tljkt-presidential-suite-living-room:Medium?wid=760&hei=427" style="width: 240px;" alt="">
                <h2>Suite</h2>
                <p>Experience refined luxury at its finest. Indulge in an exquisite bedroom, spacious living and dining areas, and mesmerising views of the Batam cityscape.</p>
                <button onclick="book('suite')">Book Now</button>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; Created with &hearts; by Irene XI RPL</p>
        </div>
    </footer>

    <script>
        function book(hotelType) {
            alert('Booking ' + hotelType + '!');
        }
    </script>
</body>
</html>
