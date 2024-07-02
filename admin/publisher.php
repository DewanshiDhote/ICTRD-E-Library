<?php include('includes/header.php')  ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Publisher Lists</h4>
                <a href="publisher-create.php" class="btn btn-primary float-end" >Add Publisher</a>

            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                 <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Publisher Name</th>
                           <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>

                        <?php
                        $publisher = getAll('publisher');
                        if(mysqli_num_rows($publisher)>0)
                        {
                              foreach($publisher as $publisherItem){
                                ?>
                            <tr>
                              <td><?= $publisherItem['id']; ?></td>
                              <td><?= $publisherItem['name']; ?></td>
                             
                              <td>
                                <a href="publisher-edit.php?id=<?= $publisherItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="publisher-delete.php?id=<?= $publisherItem['id']; ?>" 
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