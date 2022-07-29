<section class="section coming-soon">

  <div class="container">
      <div class="continer">
          <h4>Categories</h4>        
      </div>
    <div class="col-md-12">
      
      <div class="row">
      
        <?php foreach ($categories as $c) { ?>

          <div class="col-md-4 mt-3">
              <div class="card">
                  <div class="card-body">
                      <h3><?= $c ?></h3>
                  </div>
              </div>
          </div>

        <?php } ?>

      </div>

    </div>
  </div>

</section>