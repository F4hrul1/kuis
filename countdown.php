
<p id="demo"></p>

<script>
// Mengsetting tanggal untuk hitung mundur
var countDownDate = new Date("Sep 3, 2022 16:00:00").getTime();

// Memperbarui/update hitung mundur
var x = setInterval(function() {

  // Mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Mencari jarak antara waktu sekarang dengan waktu hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu hari, jam, menit, dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output hasil pada element dengan id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // Jika waktu telah habis, akan memunculkan "Expired"
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>