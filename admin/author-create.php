<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Add Author</h4>
                <a href="author.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
                
                <?= alertMessage(); ?>

                <form action="code.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>Author Name</label>
                        <input type="text" name="name" class="form-control">
                         </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="saveAuthor"  class="btn btn-primary">Save</button>
                        </div>
                    </div>
                            
                            
                </div>

                    
                    
                   
                    
                   
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>