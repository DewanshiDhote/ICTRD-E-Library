<?php
require '../config/function.php';

if(isset($_POST['saveUser']))
{
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;
    $role = validate($_POST['role']);
    
    if($name !='' || $email !='' || $phone !='' || $password !='' )
    {
        $query = "INSERT INTO users (name,phone,email,password,is_ban,role)
                  VALUES ('$name', '$phone' , '$email', '$password', '$is_ban', '$role')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php', 'User/Admin Added Successfully');
        }else{
            redirect('users-create.php', 'Something went wrong');
            
        }
    }
    else{
        redirect('users-create.php', 'Please fill all the input fields');
    }

}

if(isset($_POST['updateUser']))
{
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;
    $role = validate($_POST['role']);

    $userId = validate($_POST['userId']);

    $user = getById('users',$userId);
    if($user['status']!= 200){
        redirect('users-edit.php?id='.$userId, 'No such id found');
        
    }
    
    if($name !='' || $email !='' || $phone !='' || $password !='' )
    {
        $query = "UPDATE users SET 
        name='$name',
        phone='$phone',
        email='$email',
        password='$password',
        is_ban='$is_ban',
        role='$role' 
        WHERE id='$userId' ";
                  
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php', 'User/Admin Updated Successfully');
        }else{
            redirect('users-create.php', 'Something went wrong');
            
        }
    }
    else{
        redirect('users-create.php', 'Please fill all the input fields');
    }

}

if(isset($_POST['category_id'])){
    $category_id = $_POST['category_id'];
    $sql = "SELECT * FROM subcategories WHERE category_id = $category_id";
    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data); // Return subcategories data in JSON format
}


/*if(isset($_POST['saveBooks']))
{
    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    
    $publishers = validate($_POST['publishers']);

    if($_FILES['coverImage']['size'] > 0)
    {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";
    
        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time(). '.' .$imgExt;
        $finalImage = 'assets/uploads/books/'.$filename;
    }else{
        $finalImage = NULL;
    }

    if($_FILES['ebookUpload']['size'] > 0)
    {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath= "../assets/uploads/pdf/";
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time(). '.' .$pdfExt;
        $finalPdf = 'assets/uploads/pdf/'.$filename1;
    }else{
        $finalPdf = NULL;
    }


    $description = validate($_POST['description']);
    $status = validate($_POST['status'])== true ? '1' : '0';

    $query = "INSERT INTO books (categories, subcategories, title, publishers, coverImage, ebookUpload, description, status)
    VALUES ('$categories', '$subcategories', '$title', '$publishers', '$finalImage',
     '$finalPdf', '$description', '$status')";
    
    $result = mysqli_query($conn, $query);

    

    if($result){

        $bookidsql = "SELECT * FROM books order by id desc limit 1";
    $bookidresult = mysqli_query($conn,$bookidsql);
    $bookid=mysqli_fetch_array($bookidresult);

    $authorlen =count($_POST['author']);

    for($i=0;$i<$authorlen;$i++)
    {
        $authorsql = "INSERT INTO books_author (book_id,author_id) value('".
        $bookid['id']."','".$_POST['author'][$i]."')";
        $authorresult = mysqli_query($conn,$authorsql);
    }

           if($_FILES['coverImage']['size'] > 0)
           {
            move_uploaded_file($_FILES['coverImage']['tmp_name'],$path.$filename);
            }
            if($_FILES['ebookUpload']['size'] > 0)
           {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'],$pdfPath.$filename1);
            }

        redirect('books.php', 'Book Added Successfully');
    }else{
        redirect('books.php', 'Something went Wrong');
    }
    


    
}*/

/*if(isset($_POST['saveBooks']))
{
    // Other fields processing remains unchanged

    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $publishers = validate($_POST['publishers']);
    
    // Process coverImage and ebookUpload
    if($_FILES['coverImage']['size'] > 0)
    {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";
        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;
        $finalImage = 'assets/uploads/books/' . $filename;
    } else {
        $finalImage = NULL;
    }

    if($_FILES['ebookUpload']['size'] > 0)
    {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath = "../assets/uploads/pdf/";
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $pdfExt;
        $finalPdf = 'assets/uploads/pdf/' . $filename1;
    } else {
        $finalPdf = NULL;
    }

    $description = validate($_POST['description']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    // Insert book data
    $query = "INSERT INTO books (categories, subcategories, title, publishers, coverImage, ebookUpload, description, status)
              VALUES ('$categories', '$subcategories', '$title', '$publishers', '$finalImage', '$finalPdf', '$description', '$status')";

    $result = mysqli_query($conn, $query);

    if($result) {
        $bookidsql = "SELECT * FROM books ORDER BY id DESC LIMIT 1";
        $bookidresult = mysqli_query($conn, $bookidsql);
        $bookid = mysqli_fetch_array($bookidresult);
        
        // Insert selected authors
        $authorIds = explode(',', $_POST['author_ids']);
        foreach ($authorIds as $authorId) {
            $authorsql = "INSERT INTO books_author (book_id, author_id) VALUES ('".$bookid['id']."', '".$authorId."')";
            $authorresult = mysqli_query($conn, $authorsql);
        }

        // Move uploaded files
        if($_FILES['coverImage']['size'] > 0) {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $path . $filename);
        }
        if($_FILES['ebookUpload']['size'] > 0) {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'], $pdfPath . $filename1);
        }

        redirect('books.php', 'Book Added Successfully');
    } else {
        redirect('books.php', 'Something went wrong');
    }
}*/



/*if(isset($_POST['saveBooks'])) {
    // Other fields processing remains unchanged

    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $publisherName = validate($_POST['publisher']);

    // Process coverImage and ebookUpload
    if($_FILES['coverImage']['size'] > 0) {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";
        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;
        $finalImage = 'assets/uploads/books/' . $filename;
    } else {
        $finalImage = NULL;
    }

    if($_FILES['ebookUpload']['size'] > 0) {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath = "../assets/uploads/pdf/";
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $pdfExt;
        $finalPdf = 'assets/uploads/pdf/' . $filename1;
    } else {
        $finalPdf = NULL;
    }

    $description = validate($_POST['description']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    // Check if the publisher already exists
    $publisherQuery = "SELECT id FROM publisher WHERE id = '$publisherName'";
    $publisherResult = mysqli_query($conn, $publisherQuery);

    if(mysqli_num_rows($publisherResult) == 0) {
        // Publisher does not exist, insert it
        $insertPublisherQuery = "INSERT INTO publisher (name) VALUES ('$publisherName')";
        $insertPublisherResult = mysqli_query($conn, $insertPublisherQuery);

        if(!$insertPublisherResult) {
            // Failed to insert publisher
            redirect('books.php', 'Failed to add publisher');
        }

        // Get the newly inserted publisher ID
        $publisherId = mysqli_insert_id($conn);
    } else {
        // Publisher exists, fetch its ID
        $publisherData = mysqli_fetch_assoc($publisherResult);
        $publisherId = $publisherData['id'];
    }

    // Insert book data
    $query = "INSERT INTO books (categories, subcategories, title, publishers, coverImage, ebookUpload, description, status)
              VALUES ('$categories', '$subcategories', '$title', '$publisherId', '$finalImage', '$finalPdf', '$description', '$status')";

    $result = mysqli_query($conn, $query);

    if($result) {
        $bookidsql = "SELECT * FROM books ORDER BY id DESC LIMIT 1";
        $bookidresult = mysqli_query($conn, $bookidsql);
        $bookid = mysqli_fetch_array($bookidresult);
        
        // Insert selected authors
        $authorIds = explode(',', $_POST['author_ids']);
        foreach ($authorIds as $authorId) {
            $authorsql = "INSERT INTO books_author (book_id, author_id) VALUES ('".$bookid['id']."', '".$authorId."')";
            $authorresult = mysqli_query($conn, $authorsql);
        }

        // Move uploaded files
        if($_FILES['coverImage']['size'] > 0) {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $path . $filename);
        }
        if($_FILES['ebookUpload']['size'] > 0) {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'], $pdfPath . $filename1);
        }

        redirect('books.php', 'Book Added Successfully');
    } else {
        redirect('books.php', 'Something went wrong');
    }
}*/

if(isset($_POST['saveBooks'])) {
    // Other fields processing remains unchanged

    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $publisherId = validate($_POST['publisher_ids']); // Fetching publisher ID from hidden input

    // Process coverImage and ebookUpload
    if($_FILES['coverImage']['size'] > 0) {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";
        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;
        $finalImage = 'assets/uploads/books/' . $filename;
    } else {
        $finalImage = NULL;
    }

    if($_FILES['ebookUpload']['size'] > 0) {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath = "../assets/uploads/pdf/";
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $pdfExt;
        $finalPdf = 'assets/uploads/pdf/' . $filename1;
    } else {
        $finalPdf = NULL;
    }

    $description = validate($_POST['description']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    // Insert book data
    $query = "INSERT INTO books (categories, subcategories, title, publishers, coverImage, ebookUpload, description, status)
              VALUES ('$categories', '$subcategories', '$title', '$publisherId', '$finalImage', '$finalPdf', '$description', '$status')";

    $result = mysqli_query($conn, $query);

    if($result) {
        $bookidsql = "SELECT * FROM books ORDER BY id DESC LIMIT 1";
        $bookidresult = mysqli_query($conn, $bookidsql);
        $bookid = mysqli_fetch_array($bookidresult);
        
        // Insert selected authors
        $authorIds = explode(',', $_POST['author_ids']);
        foreach ($authorIds as $authorId) {
            $authorsql = "INSERT INTO books_author (book_id, author_id) VALUES ('".$bookid['id']."', '".$authorId."')";
            $authorresult = mysqli_query($conn, $authorsql);
        }

        // Move uploaded files
        if($_FILES['coverImage']['size'] > 0) {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $path . $filename);
        }
        if($_FILES['ebookUpload']['size'] > 0) {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'], $pdfPath . $filename1);
        }

        redirect('books.php', 'Book Added Successfully');
    } else {
        redirect('books.php', 'Something went wrong');
    }
}










  
                           
 


if(isset($_POST['updateBooks']))
{
    $bookId = validate($_POST['bookId']);
    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $publishers = validate($_POST['publishers']);
    

    $book = getById('books',$bookId);
    

    if($_FILES['coverImage']['size'] > 0)
    {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";

        $deleteImage = "../".$book['data']['coverImage'];
        if(file_exists($deleteImage)){
            unlink($deleteImage);
        }
    
        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time(). '.' .$imgExt;
        $finalImage = 'assets/uploads/books/'.$filename;
    }else{
        $finalImage = $book['data']['coverImage'];
    }

    if($_FILES['ebookUpload']['size'] > 0)
    {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath= "../assets/uploads/pdf/";

        $deletePdf = "../".$book['data']['ebookUpload'];
        if(file_exists($deletePdf)){
            unlink($deletePdf);
        }
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time(). '.' .$pdfExt;
        $finalPdf = 'assets/uploads/pdf/'.$filename1;
    }else{
        $finalPdf = NULL;
    }


    $description = validate($_POST['description']);
    $status = validate($_POST['status'])== true ? 1 : 0;

    

    $query = "UPDATE books SET
    categories='$categories',
    subcategories= '$subcategories',
    title= '$title',
    publishers= '$publishers',
    coverImage= '$finalImage',
    ebookUpload= '$finalPdf',
    description= '$description',
    status= '$status'
    WHERE id='$bookId'
    ";




$result = mysqli_query($conn, $query);



    if($result){

           if($_FILES['coverImage']['size'] > 0)
           {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $path.$filename);
            }
            if($_FILES['ebookUpload']['size'] > 0)
           {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'],$pdfPath.$filename1);
            }

        redirect('books.php?id='.$bookId, 'Book Updated Successfully');
    }else{
        redirect('books-edit.php?id='.$bookId, 'Something went Wrong');
    }

    $authorinput=validate($_POST['author']);
	
	// insert code
	
	foreach($authorinput as $cinput)
	{
		if(!in_array($cinput,$authordata))
		{
			$authori="insert into books_author (book_id,author_id) values ('".$bookId."','".$cinput."')";
			$cresult=mysqli_query($conn,$authori);
		}
	}
	
	// delete code
	
	foreach($authordata as $cdata)
    {
		if(!in_array($authordata,$authorinput))
		{
			$authordel="delete from books_author where book_id=$bookId AND author_id=$cdata";
			$catresult=mysqli_query($conn,$authordel);
		}
	}		

   
}

if(isset($_POST['saveCategory']))
{
    $category = validate($_POST['categoryname']);
    $description = validate($_POST['description']);
    
    $query = "INSERT INTO categories (categoryname, description)
    VALUES ('$category', '$description')";
    
    $result = mysqli_query($conn, $query);
    if($result){

        redirect('categories.php', 'Category Added Successfully');
    }else{
        redirect('categories.php', 'Something went Wrong');
    }
   
}

if(isset($_POST['updateCategory']))
{
    $name = validate($_POST['categoryname']);
    

    $categoryId = validate($_POST['categoryId']);

    $category = getById('categories',$categoryId);
    if($category['status']!= 200){
        redirect('categories-edit.php?id='.$categoryId, 'No such id found');
        
    }
    
    if($name !=''  )
    {
        $query = "UPDATE categories SET 
        categoryname='$name'
        WHERE id='$categoryId' ";
                  
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('categories.php', 'Category Updated Successfully');
        }else{
            redirect('categories.php', 'Something went wrong');
            
        }
    }
    

}

if(isset($_POST['saveAuthor']))
{
    $author = validate($_POST['name']);
    
    $query = "INSERT INTO author (name)
    VALUES ('$author')";
    
    $result = mysqli_query($conn, $query);
    if($result){

        redirect('author.php', 'author Added Successfully');
    }else{
        redirect('author.php', 'Something went Wrong');
    }
   
}


if(isset($_POST['updateAuthor']))
{
    $name = validate($_POST['name']);
    

    $authorId = validate($_POST['authorId']);

    $author = getById('author',$authorId);
    if($author['status']!= 200){
        redirect('author-edit.php?id='.$authorId, 'No such id found');
        
    }
    
    if($name !=''  )
    {
        $query = "UPDATE author SET 
        name='$name'
        WHERE id='$authorId' ";
                  
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('author.php', 'Author Updated Successfully');
        }else{
            redirect('author.php', 'Something went wrong');
            
        }
    }
    

}

if(isset($_POST['savePublisher']))
{
    $publisher = validate($_POST['name']);
    
    $query = "INSERT INTO publisher (name)
    VALUES ('$publisher')";
    
    $result = mysqli_query($conn, $query);
    if($result){

        redirect('publisher.php', 'Publisher Added Successfully');
    }else{
        redirect('publisher.php', 'Something went Wrong');
    }
   
}

if(isset($_POST['updatePublisher']))
{
    $name = validate($_POST['name']);
    

    $publisherId = validate($_POST['publisherId']);

    $publisher = getById('publisher',$publisherId);
    if($publisher['status']!= 200){
        redirect('publisher-edit.php?id='.$publisherId, 'No such id found');
        
    }
    
    if($name !=''  )
    {
        $query = "UPDATE publisher SET 
        name='$name'
        WHERE id='$publisherId' ";
                  
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('publisher.php', 'User/Admin Updated Successfully');
        }else{
            redirect('publisher.php', 'Something went wrong');
            
        }
    }
    

}



if(isset($_POST['updateSubcategory']))
{
    $name = validate($_POST['subcatname']);
    

    $subcategoryId = validate($_POST['subcategoryId']);

    $subcategory = getById('subcategories',$subcategoryId);
    if($subcategory['status']!= 200){
        redirect('categories-edit.php?id='.$subcategoryId, 'No such id found');
        
    }
    
    if($name !=''  )
    {
        $query = "UPDATE subcategories SET 
        subcatname='$name'
        WHERE id='$subcategoryId' ";
                  
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('sub-categories.php', 'Subcategory Updated Successfully');
        }else{
            redirect('sub-categories.php', 'Something went wrong');
            
        }
    }
    

}


if(isset($_POST['saveSubcategory'])) { // Change condition to check for button name
    if(isset($_POST['subcategory_name']) && isset($_POST['category_name'])) {
        // Get the category ID based on the selected category name
        $category_name = $_POST['category_name'];
        $category_query = "SELECT id FROM categories WHERE categoryname = '$category_name'";
        $category_result = mysqli_query($conn, $category_query);
        if(mysqli_num_rows($category_result) > 0) {
            $row = mysqli_fetch_assoc($category_result);
            $category_id = $row['id'];
            
            // Get the subcategory name from the form
            $subcategory_name = $_POST['subcategory_name'];
            
            // Insert data into the subcategory table
            $insert_query = "INSERT INTO subcategories (subcatname, category_id) VALUES ('$subcategory_name', '$category_id')";
            $insert_result = mysqli_query($conn, $insert_query);
            
            if($insert_result) {
                
            redirect('sub-categories.php', 'Subcategory Added Successfully');

            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            redirect('sub-categories.php', 'Category not found');

        }
    } else {
        redirect('sub-categories.php', 'data not recived');

    }
}

































?>
