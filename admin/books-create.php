<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Book</h4>
                <a href="books.php" class="btn btn-danger float-end" >Back</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>
             <form action="code.php" method="POST" enctype="multipart/form-data" >

             <div class="row">

             <div class="col-md-6">
                        <div class="mb-3">
                        <label>Select Categories</label>
                        <select id="category" name="category" class="form-select" >
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
                <input type="text" name="title"  class="form-control">
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

    <!-- Hidden input to store selected author IDs -->
    <input type="hidden" name="author_ids" id="authorIds">

             
    <div class="col-md-6">
    <div class="mb-3">
        <label>Publisher</label>
        <div class="select-container1" onclick="showDropdown1()">
            <div class="selected-items1" id="selectedItems1">
                <div class="input-container1">
                    <input name="publisher" type="text" id="publisherInput" onkeyup="filterDropdown1()" placeholder="Type to add or search">
                </div>
            </div>
            <div class="dropdown1" id="dropdown1">
                <!-- Options will be populated here via JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Hidden input to store selected Publisher ID -->
<input type="hidden" name="publisher_ids" id="publisherIds">
             
             
            


    

             

             <div class="col-md-6">
                <div class="mb-3">
                <label > Upload Cover</label>
                <input type="file" name="coverImage" accept="image/jpeg, image/png, image/jpg"  class="form-control">
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                <label >Ebook Upload</label>
                <input type="file" name="ebookUpload" accept=".pdf"  class="form-control">
                </div>
             </div>
             <div class="col-md-6">
               <div class="mb-3">
               <label >Description</label>
                <textarea type="text" id="description" name="description"    class="form-control mySummernote"  rows="6"  ></textarea>
             </div>
               </div>
               
               


               <div class="col-md-3">
               <div class="mb-3">
               <label >Status (checked = hidden, un-checked = visible) </label>
                <input type="checkbox" name="status" style="width:30px; height:30px;">
             </div>
               </div>

             <div class="col-md-3">
                        <div class="md-3 text-end">
                            <br/>
                        <button type="submit" name="saveBooks"  class="btn btn-primary">Save Book</button>
                        </div>
             </div>

             </div>
             </form>
                 
                  

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $(".mySummernote").summernote();
        $('.dropdown-toggle').dropdown();
    });
</script>

<?php include('includes/footer.php')  ?>