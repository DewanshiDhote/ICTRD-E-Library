<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Publisher</h4>
                <a href="publisher.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
                
                <form action="code.php" method="POST">

                <?php
                  $paramResult = checkParamId('id');
                  if(!is_numeric($paramResult)){
                    echo '<h5>'.$paramResult.'</h5>';
                    return false;
                  }
                  $publisher = getById('publisher',checkParamId('id'));
                  if($publisher['status'] == 200)
                  {
                    ?>
                 <div class="col-md-12">
                        <div class="mb-3">
                        <label for="">Publisher Id : <?= $publisher['data']['id'];?> </label>
                        <input type="hidden"  name="publisherId" value="<?= $publisher['data']['id'];?>" >

                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                        <label>Publisher Name</label>
                        <input type="text" name="name" value="<?= $publisher['data']['name'];?>" required class="form-control">
                         </div>
                    </div>
                   
                
                    <div class="col-md-12">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="updatePublisher"  class="btn btn-primary">Update</button>
                        </div>
                    </div>
                            
                            
                </div>
                    <?php

                  }
                  else{
                    echo '<h5>'.$publisher['message'].'</h5>';
                  }

                ?>
                

                    
                    
                   
                    
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>