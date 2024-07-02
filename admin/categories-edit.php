<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category</h4>
                <a href="categories.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
                
                <form action="code.php" method="POST">

                <?php
                  $paramResult = checkParamId('id');
                  if(!is_numeric($paramResult)){
                    echo '<h5>'.$paramResult.'</h5>';
                    return false;
                  }
                  $category = getById('categories',checkParamId('id'));
                  if($category['status'] == 200)
                  {
                    ?>
                 <div class="col-md-12">
                        <div class="mb-3">
                        <label for="">Category Id : <?= $category['data']['id'];?> </label>
                        <input type="hidden"  name="categoryId" value="<?= $category['data']['id'];?>" >

                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label>Category Name</label>
                        <input type="text" name="categoryname" value="<?= $category['data']['categoryname'];?>" required class="form-control">
                         </div>
                    </div>
                   
                
                    <div class="col-md-12">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="updateCategory"  class="btn btn-primary">Update</button>
                        </div>
                    </div>
                            
                            
                </div>
                    <?php

                  }
                  else{
                    echo '<h5>'.$category['message'].'</h5>';
                  }

                ?>
                

                    
                    
                   
                    
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>