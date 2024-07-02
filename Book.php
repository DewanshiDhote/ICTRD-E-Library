<?php
session_start();
if(!isset($_SESSION["fname"])){
    header("Location:login.php");
}
$pageTitle = "Books";
include('includes1/book_header.php');

// Handle author name search
if(isset($_POST['searchAuthor'])){
    $authorName = $_POST['authorName'];
    $authorQuery = "SELECT id FROM author WHERE name LIKE '%$authorName%'";
    $authorResult = mysqli_query($conn, $authorQuery);

    if(mysqli_num_rows($authorResult) > 0){
        $authorRow = mysqli_fetch_assoc($authorResult);
        $authorId = $authorRow['id'];

        // Search for books associated with the author
        $bookQuery = "SELECT * FROM books WHERE id IN (SELECT book_id FROM books_author WHERE author_id = $authorId) AND status='0'";
        $searchType = "Author";
    } else {
        // No author found with the given name
        $bookQuery = "SELECT * FROM books WHERE status='0'"; // Default query to display all books
    }
} elseif (isset($_POST['searchPublisher'])) {
    // Handle publisher name search
    $publisherName = $_POST['publisherName'];
    $publisherQuery = "SELECT id FROM publisher WHERE name LIKE '%$publisherName%'";
    $publisherResult = mysqli_query($conn, $publisherQuery);

    if(mysqli_num_rows($publisherResult) > 0){
        $publisherRow = mysqli_fetch_assoc($publisherResult);
        $publisherId = $publisherRow['id'];

        // Search for books associated with the publisher
        $bookQuery = "SELECT * FROM books WHERE publishers = $publisherId AND status='0'";
        $searchType = "Publisher";
    } else {
        // No publisher found with the given name
        $bookQuery = "SELECT * FROM books WHERE status='0'"; // Default query to display all books
    }
} else {
    // Default query to display all books
    $bookQuery = "SELECT * FROM books WHERE status='0'";
}

$result = mysqli_query($conn, $bookQuery);
?>

<style>
    .download-button {
        background-color: #0f8967;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        align-items: center;
    }

    .download-button:hover {
        background-color: #ff6700;
    }
</style>

<div class="row" style="display: flex;
  align-items: center;
  justify-content: center;">
    <div class="col-md-4 mt-4">
        <form method="post" action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by Author Name" name="authorName">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="searchAuthor">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4 mt-4">
        <form method="post" action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by Publisher Name" name="publisherName">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="searchPublisher">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class='row'>
    <div class='col-12'>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php
                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow-sm">
                            <img src="<?= $row['coverImage']; ?>" class="w-100 rounded" alt="Img" style="min-height:300px; max-height:200px;" />
                            <div class="card-body">
                                <h5><?= $row['title']; ?></h5>
                                <div>
                                    <button class="download-button"><a href="Books_detail.php?id=<?= $row['id']; ?>">Read More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                    ?>
                    <div class="col-md-12">
                        <h5>No Books Available</h5>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>



<?php include('includes1/footer_front.php'); ?>
