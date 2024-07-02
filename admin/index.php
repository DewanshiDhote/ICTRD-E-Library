<?php include('includes/header.php');  ?>

  <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                 <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
                <h5 class="font-weight-bolder mb-0">
                      <?= getCount('users') ?>
                </h5>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                 <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Books</p>
                <h5 class="font-weight-bolder mb-0">
                <?= getCount('books') ?>
                </h5>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card card-body p-3">
                 <p class="text-sm mb-0 text-capitalize font-weight-bold">Category</p>
                <h5 class="font-weight-bolder mb-0">
                     8
                </h5>
          </div>
        </div>
  </div>

<?php include('includes/footer.php')  ?>