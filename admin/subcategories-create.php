<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Add Subcategory</h4>
                <a href="sub-categories.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>
             <form action="code.php" method="POST" enctype="multipart/form-data" >

             <div class="col-md-12">
                <div class="mb-3">
                <label > Subcategory</label>
                <input type="text" name="subcategory_name" placeholder="Subcategory Name" class="form-control">
                </div>
             </div>

             <div class="col-md-12">
                <div class="mb-3">
                <label >Select Category Name</label>
                <select name="category_name" class="form-select">
                    <option value="">Select category</option>
        <!-- Populate categories from database -->
                  <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['categoryname']."'>".$row['categoryname']."</option>";
                    }
                    ?>
                </select>
                </div>
                </div>

                  

             <div class="col-md-3">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="saveSubcategory"  class="btn btn-primary">Save </button>
                        </div>
             </div>

             </form>
                 
                  

            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php')  ?>
