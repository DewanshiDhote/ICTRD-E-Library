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

                 <table id="myTable"  class="table table-bordered table-striped">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Title</th>
                           <th>Categories</th>
                           <th>subcategories</th>
                           <th>Publishers</th>
                           <th>Author</th>
                           <th>Cover Image</th>
                           <th>status</th>
                      
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

                                $subcategoryId =$booksItem['subcategories'];
                                $query_subcategory = "SELECT * FROM subcategories where id='$subcategoryId'";
                                $result_subcategory = mysqli_query($conn, $query_subcategory);
                    
                                $publisherId =$booksItem['publishers'];
                                $query_publisher = "SELECT * FROM publisher where id='$publisherId'";
                                $result_publisher = mysqli_query($conn, $query_publisher);

                                
                                $authorId = [];
                                $authorId[] = $booksItem['author'];

                                if (!empty($authorId)) {
                                    // Construct the query to fetch author details
                                    $query_author = "SELECT * FROM author WHERE id IN (" . implode(",", $authorId) . ")";
                                    
                                    // Execute the query
                                    $result_author = mysqli_query($conn, $query_author);


                                
                     ?>
                             
                            <tr>
                              <td><?= $booksItem['id']; ?></td>
                              <td><?= $booksItem['title']; ?></td>
                              <td>
                              <?php foreach($result_category as $category_row){echo $category_row['categoryname'];} ?>
                              </td>

                              <td>
                              <?php foreach($result_subcategory as $subcategory_row){echo $subcategory_row['subcatname'];} ?>
                              </td>

                              <td>
                                <?php foreach($result_publisher as $publisher_row){echo $publisher_row['name'];} ?>
                            </td>
                            <td>
                            <?php 
                                       $authorNames = [];

                                       // Fetch author names from the result
                                       while ($author_row = mysqli_fetch_assoc($result_author)) {
                                           $authorNames[] = $author_row['name'];
                                       }
                                   
                                       // Display the author names separated by commas
                                       echo implode(', ', $authorNames);
                                   } else {
                                       // Handle the case when $authorId array is empty
                                       echo "No authors selected";
                                   }
                                        ?>                           
                                         </td>
                            
                              <td><?= $booksItem['coverImage']; ?></td>
                              
                              <td>
                                <?php
                                 if($booksItem['status']==1){
                                    echo '<span class="badge bg-danger text-white">Hidden</span>';
                                }else{
                                    echo '<span class="badge bg-success text-white">Visible</span>';
                                }
                                ?>
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

<?php include('includes/footer.php')  ?>4