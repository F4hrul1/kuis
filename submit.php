<?php
  require_once 'init.php';
  // Dapatkan semua jawaban dari sesi
  $answers = isset($_SESSION['answers']) ? $_SESSION['answers'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <div class="m-12 mx-64">
  <!-- Kembali ke indeks -->
  <a href="index.php" class="text-2xl text-blue-500" 
    onclick="<?php resetSession() ?>">
      Mulai Ulang Kuis
    </a>
  </div>
</body>
</html>

