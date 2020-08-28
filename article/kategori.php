<?php include './template/header.php'; ?>

    <div class="container">
      
      <div class="row mt-3">
        <div class="col">
          <h1>Kategori</h1>
          <hr>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/artis.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[0]["userId"]  ?>. Artis</h5>
              <a href="artis.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/politik.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[10]["userId"]  ?>. Politik</h5>
              <a href="politik.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/pendidikan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[20]["userId"]  ?>. Pendidikan</h5>
              <a href="pendidikan.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/ekonomi.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[30]["userId"]  ?>. Ekonomi</h5>
              <a href="ekonomi.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/hukum.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[40]["userId"]  ?>. Hukum</h5>
              <a href="hukum.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/lifestyle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[50]["userId"]  ?>. Lifestyle</h5>
              <a href="lifestyle.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/peliharaan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[60]["userId"]  ?>. Peliharaan</h5>
              <a href="peliharaan.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/kesehatan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[70]["userId"]  ?>. Kesehatan</h5>
              <a href="kesehatan.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/luar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[80]["userId"]  ?>. Luar Negri</h5>
              <a href="luar.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3">
            <img src="img/kategori/olahraga.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $kategori[90]["userId"]  ?>. Olahraga</h5>
              <a href="olahraga.php" class="btn btn-primary">Buka Kategori</a>
            </div>
          </div>
        </div>

      </div>

       

    </div>







   <?php include './template/footer.php'; ?>