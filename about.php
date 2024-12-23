<?php
$title = "Home Page";
include 'header.php';
?>
   <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       

    <?php
    $images = [];
    for ($i = 1; $i <= 30; $i++) {
        $images[] = "https://picsum.photos/300/300?random=" . $i;
    }

    foreach ($images as $image) {
        echo '<div class="col">
                <div class="card shadow-sm">
                    <img src="' . $image . '" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
              </div>';
    }
    ?>

       
      </div>
    </div>
  </div>

</main>
<?php include 'footer.php'; ?>
