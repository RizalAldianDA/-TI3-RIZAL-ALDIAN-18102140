<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);

}
a{
  color: #ffffff;
  text-decoration-color: #1a4ea3;
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
  <h1>Rizal Aldian D A | 18102140 | Teknik Informatika</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href="php_syntax.php">PHP Syntax</a></li>
      <li><a href="php_comment.php">PHP Comments</a></li>
      <li><a href="php_variabels.php">PHP Variables</a></li>
      <li><a href="php_echo_print.php">PHP Echo/Print</a></li>
      <li><a href="php_data_type.php">PHP Data Type</a></li>
      <li><a href="php_string.php">PHP String</a></li>
      <li><a href="php_numbers.php">PHP Numbers</a></li>
      <li><a href="php_math.php">PHP Math</a></li>
      <li><a href="php_constants.php">PHP Constants</a></li>
      <li><a href="php_operators.php">PHP Operators</a></li>
      <li><a href="php_statement.php">PHP If Else ElseIf</a></li>
      <li><a href="php_switch.php">PHP Switch</a></li>
      <li><a href="php_loops.php">PHP Loops</a></li>
      <li><a href="php_function.php">PHP Functions</a></li>
      <li><a href="php_array.php">PHP Arrays</a></li>
      <li><a href="php_superglobal.php">PHP Superglobals</a></li>
      <li><a href="php_RegEx.php">PHP RegEx</a></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h1>Tugas Pertemuan 8</h1>
    <p>Tugas pertemuan 8 adalah mengimplementasikan PHP Fundamental yang meliputi:
    <ol>
      <li>Membuat menu-menu di sidebar sebelah kiri. Apabila sidebar diklik akan menuju ke halaman lain yang merupakan implementasi dari sidebar tersebut. (Silahkan melihat contoh).</li>
      <li>Di bagian header silahkan dituliskan <b>Nama, NIM, dan Kelas</b> kalian masing-masing.</li>
      <li>Di bagian body silahkan diisi tulisan bebas.</li>
      <li>Di bagian Tentang Saya silahkan diisikan informasi mengenai diri kalian.</li>
    </ol>
    Upload hasil pengerjaan di <b>gitlab di folder practice8</b> dan juga di <b>hosting</b>. Jangan lupa untuk mengupload semua file tugas yang terkait di link (tidak hanya file index.html).<br><br>
    Selamat mengerjakan :>
    </p>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>Tentang Saya</h2>
      <p>Nama saya adalah Rizal Aldian D A, NIM 18102140, Kelas S1IF-06-TI3.</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>
