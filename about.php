<div class="container my-5">
    <div class="row">
        <div class="col">
            <?php
            $sql = "SELECT * FROM about";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h1>" . $row['about_title'] . "</h1>";
                    echo "<p>" . $row['about_content'] . "</p>";
                }
            } else {
                echo "No about information found.";
            }
            ?>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Muhammad Daffa</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
     body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url('ikan.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
</style>
<body class="bg-light">

  <!-- About Section -->
  <section class="text-center py-5 text-white">
    <div class="container">
      <h2>About Me</h2>
      <p>Halo nama saya Muhammad Daffa. Saya seorang pengembang web yang bersemangat dengan fokus pada pembuatan kode yang bersih dan efisien. Dengan pengalaman dalam pengembangan frontend dan backend, saya bertujuan untuk membangun situs web yang responsif dan ramah pengguna. Keahlian saya terletak pada PHP, MySQL, dan Bootstrap, memungkinkan saya membuat aplikasi web yang dinamis dan menarik secara visual.</p>
      <p>Selain coding, saya senang mempelajari teknologi baru dan mengikuti tren terkini dalam pengembangan web. Di waktu luang saya, saya suka menjelajahi alat-alat baru dan bereksperimen dengan berbagai teknik desain untuk lebih meningkatkan keterampilan saya.</p>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
