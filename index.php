<?php
  require_once 'init.php';
$init = 0;
if(isset($_GET['id'])){
  $init = $_GET['id'];
}else{
  $init = 1;
}

  // Dapatkan pertanyaan dari id
  $question = getQuestion($init, $questions);
  //Jika tidak ada pertanyaan, maka redirect ke halaman indeks
  if (!$question) {
    header('Location: index.php');
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
  <title>Question</title>
</head>
<body>
  <!-- Pertanyaan -->
  <div>
    <div class="content">
    <h1 class="text-3xl">INI BUKAN KULON</h1>
    <p class="text-xl">
      <?= $question['question'] ?>
    </p>
    <!-- Formulir Posting Jawaban -->
        <form action="" method="post">
        <?php foreach ($question['options'] as $key => $option): ?>
          <!-- Input saat diklik, simpan jawaban pada sesi -->
          <input type="radio" name="answer" value="<?= $key ?>" id="<?= $key ?>"
            <?php if (isset($_SESSION['answers'][$init]) && $_SESSION['answers'][$init] == $key): ?>
              checked
            <?php endif ?>
            onchange="this.form.submit()"
          >
          <label for="<?= $key ?>">
            <?= $option ?>
          </label>
          <br/>
        <?php endforeach ?>
          </form>
    </div>
      

    <!-- Pertanyaan Sebelumnya dan Selanjutnya -->
    <div class="container_btn">
      <?php if ($init > 1): ?>
        <a href="index.php?id=<?= $init - 1 ?>" class="text-xl btn_prev">
          Previous
        </a>
      <?php else : ?>
        <a href=""></a>
      <?php endif ?>
      <?php if ($init < count($questions)): ?>
        <a href="index.php?id=<?= $init + 1 ?>" class="text-xl btn_next">
          Next
        </a>
        <!-- Jika pertanyaan selesai, pergi ke halaman kirim -->
        <?php else : ?>
        <a onclick="return confirm('Yakin mau disubmit?')" href="submit.php" class="text-xl btn_submit">
          Submit
        </a>
      <?php endif ?>
    </div>
    <!-- Pertanyaan yang Tersedia -->
    <div class="page">
      <?php foreach ($questions as $key => $question): ?>
        <!-- Jika halaman dibuka, tidak bisa diklik -->
        <?php if ($init == $key) : ?>
          <span href="index.php?id=<?= $key ?>" class="page_num now">
            <?= $key ?>
          </span>
        <?php else : ?>
          <a href="index.php?id=<?= $key ?>" class="page_num">
            <?= $key ?>
          </a>
        
        <?php endif ?>
      <?php endforeach ?>
    </div>
    <?php 
      require_once 'countdown.php';
    ?>
  </div>
</body>
</html>