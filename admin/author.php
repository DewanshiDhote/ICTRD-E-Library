<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Author Lists</h4>
                <a href="author-create.php" class="btn btn-primary float-end" >Add Author</a>

            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                 <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Author Name</th>
                           <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>

                        <?php
                        $author = getAll('author');
                        if(mysqli_num_rows($author)>0)
                        {
                              foreach($author as $authorItem){
                                ?>
                            <tr>
                              <td><?= $authorItem['id']; ?></td>
                              <td><?= $authorItem['name']; ?></td>
                             
                              <td>
                                <a href="author-edit.php?id=<?= $authorItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="author-delete.php?id=<?= $authorItem['id']; ?>" 
                                class="btn btn-danger btn-sm mx-2"
                                onclick="return confirm('Are you sure you want to delete this data')"
                                >
                                Delete
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
                                <td colspan="7">No record Found</td>
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