
<?php include('includes/header.php')  ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Book</h4>
                <a href="books.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>
             <form action="code.php" method="POST" enctype="multipart/form-data" >

             <?php
              $paramResult = checkParamId('id');
              if(!is_numeric($paramResult)){
                echo '<h5>'.$paramResult.'</h5>';
                return false;
              }
              $books = getById('books',$paramResult);
              if($books){
                if($books['status'] == 200){
                  $bookId=$_GET['id'];
                  $authorsql="select * from books_author where book_id=$bookId";
                  $authorresult=mysqli_query($conn,$authorsql);
                  $authordata=[];

                  while($adata=mysqli_fetch_array($authorresult))
                  {
                  $authordata[]=$adata['author_id'];
                  }

                  
                    ?>

                    <input type="hidden" name="bookId" value="<?= $books['data']['id'];?>">

             <div class="row">

             <div class="col-md-6">
                        <div class="mb-3">
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
             <div class="col-md-6">
                        <div class="mb-3">
                        <label>Select Subategories</label>
                        <select id="subcategory" name="subcategory" class="form-select">
                        <option value="">Select</option>
                        
                        </select>
                        
                        </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                <label > Book Title</label>
                <input type="text" name="title" value="<?= $books['data']['title'];?>" required class="form-control">
                </div>
             </div>

             <div class="col-md-6">
             <div class="mb-3">
            <label>Author</label>
            <div class="select-container" onclick="showDropdown()">
                <div class="selected-items" id="selectedItems">
                    <div class="input-container">
                        <input type="text" id="authorInput" onkeyup="filterDropdown()" placeholder="Type to add or search">
                    </div>
                </div>
                <div class="dropdown" id="dropdown">
                    <!-- Options will be populated here via JavaScript -->
                </div>
            </div>
        </div>
             </div>

             <?php
             $sql = "SELECT * FROM publisher";
             $result = mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)>0)
             {
                ?>
                   <div class="col-md-6">
                <div class="mb-3">
                <label >Publisher</label>
                
                <select id="" name="publishers" class="form-select">
                        <option value="">Select</option>
                        <?php
                        foreach($result as $row)
                        {
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                            
                            <?php
                        }
                        ?>
                        </select>
                </div>
             </div>
                <?php
             }
             else{
                echo "No Data Available";
             }
             ?>

             <div class="col-md-6">
                <div class="mb-3">
                <label > Upload Cover</label>
                <input type="file" name="coverImage"  accept="image/jpeg, image/png, image/jpg"  class="form-control">
                <img src="<?= '../' .$books['data']['coverImage'];?>" style="width:70px;height:70px;" alt="Img" />
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                <label >Ebook Upload</label>
                <input type="file" name="ebookUpload" value="<?= $books['data']['ebookUpload'];?>" accept=".pdf" class="form-control">
                <img src="<?= '../' .$books['data']['ebookUpload'];?>" style="width:70px;height:70px;" alt="pdf" />
                </div>
             </div>
             <div class="col-md-6">
               <div class="mb-3">
               <label >Description</label>
                <textarea type="text" name="description" value="<?= $books['data']['description'];?>"  rows="6"   class="form-control mySummernote">
            </textarea>
             </div>
               </div>
              

               <div class="col-md-3">
               <div class="mb-3">
               <label >Status (checked = hidden, un-checked = visible) </label>
                <input type="checkbox" name="status" value="<?= $books['data']['status'] == true ? 'checked' : '';?> "style="width:30px; height:30px;">
             </div>
               </div>

             <div class="col-md-3">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="updateBooks"  class="btn btn-primary"><a href="books.php" style="color:white;">Update book</a></button>
                        </div>
             </div>

             </div>

             <?php
                }
                else
                {
                    echo '<h5>No such data found</h5>';
                }
              }
              else{
                echo '<h5>Something Went wrong</h5>';
              }
              
             ?>
             </form>
                 
                  

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')  ?>4