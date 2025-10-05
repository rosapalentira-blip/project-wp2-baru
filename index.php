<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $table = (int)$_POST['table'];
    $order = isset($_POST['order']) ? $_POST['order'] : [];
    $menu_prices = [
        "Nasi Goreng" => 25000,
        "Mie Ayam" => 20000,
        "Jus Jeruk" => 10000
    ];

    // Hitung total harga
    $total = 0;
    foreach ($order as $item) {
        $total += $menu_prices[$item];
    }

    // Tampilkan hasil
    echo "<h1>Terima Kasih, $name!</h1>";
    echo "<p>Meja Nomor: $table</p>";
    echo "<p>Pesanan:</p><ul>";
    foreach ($order as $item) {
        echo "<li>$item - Rp" . number_format($menu_prices[$item], 0, ',', '.') . "</li>";
    }
    echo "</ul>";
    echo "<p><strong>Total yang Harus Dibayar: Rp" . number_format($total, 0, ',', '.') . "</strong></p>";
}
?>