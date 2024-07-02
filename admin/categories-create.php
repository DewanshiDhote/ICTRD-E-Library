<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Add Category</h4>
                <a href="categories.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>
             <form action="code.php" method="POST" enctype="multipart/form-data" >

             <div class="col-md-12">
                <div class="mb-3">
                <label > Category</label>
                <input type="text" name="categoryname" required class="form-control">
                </div>
             </div>

             <div class="col-md-12">
               <div class="mb-3">
               <label >Description</label>
                <textarea type="text"  name="description"   required class="form-control mySummernote"  rows="6"  ></textarea>
             </div>
               </div>

             <div class="col-md-3">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="saveCategory"  class="btn btn-primary">Save Category</button>
                        </div>
             </div>

             </form>
                 
                  

            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php')  ?>