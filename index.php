<?php
include('config.php');
include('includes/header.php');

// Menentukan halaman yang ditampilkan berdasarkan parameter 'page'
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

$page_file = "pages/{$page}.php";

// Menampilkan halaman yang sesuai atau pesan error jika halaman tidak ditemukan
if (file_exists($page_file)) {
    include($page_file);
} else {
    echo "<div class='container my-5'><p>Page not found!</p></div>";
}

include('includes/footer.php');
?>
