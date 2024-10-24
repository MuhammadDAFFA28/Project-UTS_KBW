
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk membuat gambar background responsive */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url('loli.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        /* Tambahan untuk mengatur konten di tengah halaman */
        .content {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            font: optional;
            color: white;
        }

    </style>
</head>
<body>

    <!-- Konten di tengah halaman -->
    <div class="content py-5 text-white text-center">
    <div class="container my-5">
        <br>
        <br>
        <br>
        <h3 class="display-1">Contact</h3>
        <div class="col">
            <?php
            $sql = "SELECT * FROM contact";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p>" . $row['email'] . "</p>";
                    echo "<p>" . htmlspecialchars($row['message']) . " <a href='https://www.instagram.com/mhmmaddaffaaa/?next=%2F' target='_blank'>Instagram saya</a></p>";

                }
            } else {
                echo "No content found.";
            }
            ?>
        </div>
</div>
</div>

    <!-- Link Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
