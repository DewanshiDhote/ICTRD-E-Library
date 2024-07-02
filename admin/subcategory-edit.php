<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Subategory</h4>
                <a href="sub-categories.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
                
                <form action="code.php" method="POST">

                <?php
                  $paramResult = checkParamId('id');
                  if(!is_numeric($paramResult)){
                    echo '<h5>'.$paramResult.'</h5>';
                    return false;
                  }
                  $subcategory = getById('subcategories',checkParamId('id'));
                  if($subcategory['status'] == 200)
                  {
                    ?>
                 <div class="col-md-12">
                        <div class="mb-3">
                        <label for="">Subcategory Id : <?= $subcategory['data']['id'];?> </label>
                        <input type="hidden"  name="subcategoryId" value="<?= $subcategory['data']['id'];?>" >

                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label>subcategory Name</label>
                        <input type="text" name="subcatname" value="<?= $subcategory['data']['subcatname'];?>" required class="form-control">
                         </div>
                    </div>
                   
                
                    <div class="col-md-12">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="updateSubcategory"  class="btn btn-primary">Update</button>
                        </div>
                    </div>
                            
                            
                </div>
                    <?php

                  }
                  else{
                    echo '<h5>'.$subcategory['message'].'</h5>';
                  }

                ?>
                

                    
                    
                   
                    
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>

