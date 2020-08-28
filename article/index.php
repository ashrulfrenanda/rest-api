<?php include './template/header.php'; ?>
    <div class="container">
      
      <div class="row mt-3">
        <div class="col">
          <h1>All Article</h1>
        </div>
      </div>

       <div class=m-slider>
    <div class=isi-slider>
      <img src="img/kategori/gambar1.jpg" alt="Gambar 1">
      <img src="img/kategori/gambar2.jpeg" alt="Gambar 2">
      <img src="img/kategori/gambar3.jpg" alt="Gambar 3">
    </div>
  </div>


      <div class="row">
        <?php foreach ($kategori as $row ) { ?>
        <div class="col-md-4">
          <div class="card mb-3" style="height: 350px;">
            <div class="card-body">
              <h5 class="card-title"><?= $row["id"] ?>. <?= $row["title"] ?></h5>
              <hr>
              <p class="card-text"><?= $row["body"];  ?></p>
              <a href="#" class="btn btn-primary">Buka Article</a>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>

    </div>

<?php include './template/footer.php'; ?>