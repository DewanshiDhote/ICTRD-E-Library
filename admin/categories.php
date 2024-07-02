<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Book Category</h4>
                <a href="categories-create.php" class="btn btn-primary float-end" >Add Category</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                 <table id="myTable"  class="table table-bordered table-striped">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Category Name</th>
                           <th>Description</th>  
                           <th>Action</th>  

                       </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                        $category = getAll('categories');
                        if(mysqli_num_rows($category)>0)
                        {
                              foreach($category as $categoryItem){
                                ?>
                            <tr>
                              <td><?= $categoryItem['id']; ?></td>
                              <td><?= $categoryItem['categoryname']; ?></td>
                              <td><?= $categoryItem['description']; ?></td>
                            

                              <td>
                                <a href="categories-edit.php?id=<?= $categoryItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="categories-delete.php?id=<?= $categoryItem['id']; ?>" 
                                class="btn btn-danger btn-sm mx-2"
                                onclick="return confirm('Are you sure you want to delete this data')"
                                >
                                Delete
                            </a>
                              </td>
                            </tr>
                                <?php
                              }
                        }
                        else
                        {
                            ?>
                             <tr>
                                <td colspan="3">No record Found</td>
                             </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                 </table>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>4