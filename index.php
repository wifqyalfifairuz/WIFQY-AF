<!DOCTYPE html>
<html lang="en">
<head>
    <title Membuat Website dengan PHP title>
    <meta charset="UTF-8">
    <meta name="description" contens="My PHP Website">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">SMK Negeri 6 kota tanggerang selatan</h1>
        <h3 class="desc">CERDAS UNGGUL BERKARAKTER</h3>
        <nav id="navigation">
        <ul>
        <li><a href="index.php?page=home">Home</a>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
</ul>
</nav>
</header>
<div id="contents">
<?php
if (isset($_GET['page'])) {
    p$age = $_GET['page'];
    switch ($page) {
    case 'home' :
    include "home.php";
    break;
    case 'contact.php' :
        include "contact.php";
}
} else {
include "home.php";
}
?>
</div>
</footer>
&copy Copyright rd2ni1d 2024
</footer>
</body>
</html>