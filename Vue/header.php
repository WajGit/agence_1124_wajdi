<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="./assets/js/script.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="./index.php">
                    <img src="./assets/img/logo.png" alt="">
                    Agence 1124
                </a>
            </div>
            <div class="search">
                <form action="index.php?action=liste" method="post">
                    <input type="search" name="searchValue" placeholder="Votre recherche">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></button>
                </form>
            </div>
        </nav>
    </header>
