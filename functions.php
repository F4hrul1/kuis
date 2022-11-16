<?php


// Berfungsi untuk mendapatkan pertanyaan dari url ID
function getQuestion($id, $questions) {
// Jika tidak ada pertanyaan dengan ID, maka kembalikan false
  if (!isset($questions[$id])) {
    return false;
  }
//Mengembalikan pertanyaan
  return $questions[$id];
}

// Berfungsi untuk mengatur ulang sesi
function resetSession() {
// Hapus sesi jawaban
  unset($_SESSION['answers']);
}