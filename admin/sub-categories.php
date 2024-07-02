<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Subcategory Lists</h4>
                <a href="subcategories-create.php" class="btn btn-primary float-end" >Add Subcategory</a>

            </div>
            <div class="col-md-3">
                        <div class="mb-3 ms-5">
                        <label>Select Categories</label>
                        <select id="category" name="category" class="form-select">
                        <option value="">Select</option>
                        <?php
                        include 'dbcon.php';
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='".$row['id']."'>".$row['categoryname']."</option>";
                            }
                            ?>
                        </select>
                        </div>
             </div>
            <div class="card-body">
            
            <?= alertMessage(); ?>

            <div id="subcategoryTable"></div>



            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>