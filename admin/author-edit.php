<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Author</h4>
                <a href="author.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
                
                <form action="code.php" method="POST">

                <?php
                  $paramResult = checkParamId('id');
                  if(!is_numeric($paramResult)){
                    echo '<h5>'.$paramResult.'</h5>';
                    return false;
                  }
                  $author = getById('author',checkParamId('id'));
                  if($author['status'] == 200)
                  {
                    ?>
                 <div class="col-md-12">
                        <div class="mb-3">
                        <label for=""  >Author Id :  <?= $author['data']['id'];?> </label>
                        <input type="hidden" name="authorId" value="<?= $author['data']['id'];?>" >

                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label>Author Name</label>
                        <input type="text" name="name" value="<?= $author['data']['name'];?>" required class="form-control">
                         </div>
                    </div>
                   
                
                    <div class="col-md-12">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="updateAuthor"  class="btn btn-primary">Update</button>
                        </div>
                    </div>
                            
                            
                </div>
                    <?php

                  }
                  else{
                    echo '<h5>'.$author['message'].'</h5>';
                  }

                ?>
                

                    
                    
                   
                    
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>