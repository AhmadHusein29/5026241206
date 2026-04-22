<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Peminjaman Ruangan Kampus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>

  body{
    background-color:#eef2f7;
  }

  h2{
    color:#1a3c6e;
    font-weight:bold;
  }

  .btn-primary{
    background-color:#1a3c6e;
    border:none;
  }

  .btn-warning{
    background-color:#f39c12;
    border:none;
    color:white;
  }

  .btn-success{
    background-color:#27ae60;
    border:none;
  }

  .modal-header{
    background-color:#1a3c6e;
    color:white;
  }

  .modal-footer{
    background-color:#f5f5f5;
  }

  </style>

</head>

<body>

<div class="container mt-5">

<h2 class="text-center">Sistem Informasi Peminjaman Ruangan</h2>

<p class="text-center">
Website ini digunakan oleh mahasiswa untuk melihat informasi peminjaman ruangan yang tersedia di kampus.
</p>

<div class="text-center mt-4">

<button class="btn btn-primary" id="btnShow">Lihat Informasi Ruangan</button>
<button class="btn btn-warning" id="btnHide">Tutup Informasi</button>
<button class="btn btn-success" id="btnToggle">Toggle Informasi</button>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Header -->
<div class="modal-header">
<h4 class="modal-title">Informasi Peminjaman Ruangan</h4>
<button class="close text-white" data-dismiss="modal">&times;</button>
</div>

<!-- Body -->
<div class="modal-body">

<p><b>Ruangan:</b> Lab Komputer 2</p>
<p><b>Kapasitas:</b> 30 Orang</p>
<p><b>Fasilitas:</b> Komputer, Proyektor, AC</p>

<p>
Mahasiswa yang ingin menggunakan ruangan ini diwajibkan melakukan
peminjaman melalui sistem kampus sebelum kegiatan berlangsung.
</p>

</div>

<!-- Footer -->
<div class="modal-footer">
<button class="btn btn-danger" data-dismiss="modal">Tutup</button>
</div>

</div>
</div>
</div>

</div>

<script>

$(document).ready(function(){

$("#btnShow").click(function(){
$("#myModal").modal("show");
});

$("#btnHide").click(function(){
$("#myModal").modal("hide");
});

$("#btnToggle").click(function(){
$("#myModal").modal("toggle");
});

});

</script>

</body>
</html>
