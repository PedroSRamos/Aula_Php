<?php

$base = $_SERVER["PHP_SELF"];

echo '<div class="topnav">';

if ($base == "/trab-2-cristiano-sip6/index.php") {
    echo '<a href="index.php" class="active">Home</a>';
} else {
    echo '<a href="index.php">Home</a>';
}

if ($base == "/trab-2-cristiano-sip6/cliente.php") {
    echo '<a href="./cliente.php" class="active">Cliente</a>';
} else {
    echo '<a href="./cliente.php">Cliente</a>';
}

if ($base == "/trab-2-cristiano-sip6/reserva.php") {
    echo '<a href="./reserva.php" class="active">Reserva</a>';
} else {
    echo '<a href="./reserva.php">Reserva</a>';
}

echo '</div><br>';