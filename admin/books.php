<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Book List</h4>
                <a href="books-create.php" class="btn btn-primary float-end" >Add Book</a>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                 <table id="tableID"  class="table table-bordered table-striped">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Title</th>
                           <th>Categories</th>
                           
                           <th>Publishers</th>
                          
                           <!-- <th>Cover Image</th> -->
                           
                           <th>Action</th>
                      
                       </tr>
                    </thead>
                    <tbody>
                    
                        
                    <?php
                        $books = getAll('books');
                        if(mysqli_num_rows($books)>0)
                        {
                              foreach($books as $booksItem){

                                $categoryId =$booksItem['categories'];
                                $query_category = "SELECT * FROM categories where id='$categoryId'";
                                $result_category = mysqli_query($conn, $query_category);

                                
                    
                                $publisherId =$booksItem['publishers'];
                                $query_publisher = "SELECT * FROM publisher where id='$publisherId'";
                                $result_publisher = mysqli_query($conn, $query_publisher);
    
                     ?>
                             
                            <tr>
                              <td><?= $booksItem['id']; ?></td>
                              <td><?= $booksItem['title']; ?></td>
                              <td>
                              <?php foreach($result_category as $category_row){echo $category_row['categoryname'];} ?>
                              </td>

                              

                              <td>
                                <?php foreach($result_publisher as $publisher_row){echo $publisher_row['name'];} ?>
                            </td>
                            
                            
                              
                              

                              <td>
                                <a href="books-edit.php?id=<?= $booksItem['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit text-dark text-lg"></i></a>
                                <a href="books-delete.php?id=<?= $booksItem['id']; ?>" 
                                class="btn btn-danger btn-sm mx-2"
                                onclick="return confirm('Are you sure you want to delete this data')"
                                >
                                <i class="fa fa-trash text-dark text-lg"></i>
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
                                <td colspan="8">No record Found</td>
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


<?php include('includes/footer.php')  ?>
