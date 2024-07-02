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


if(isset($_POST['saveBooks']))
{
    $categories = validate($_POST['categories']);
    $subcategories = validate($_POST['subcategories']);
    $title = validate($_POST['title']);
    $author = validate($_POST['author']);
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

    $query = "INSERT INTO books (categories, subcategories, title, author, publishers, coverImage, ebookUpload, description, status)
    VALUES ('$categories', '$subcategories', '$title', '$author', '$publishers', '$finalImage',
     '$finalPdf', '$description', '$status')";
    
    $result = mysqli_query($conn, $query);
    if($result){

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
    


    
}

if(isset($_POST['updateBooks']))
{
    $bookId = validate($_POST['bookId']);
    $categories = validate($_POST['categories']);
    $subcategories = validate($_POST['subcategories']);
    $title = validate($_POST['title']);
    $author = validate($_POST['author']);

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
    $status = validate($_POST['status'])== true ? '1' : '0';

    $query = "UPDATE books SET
    categories='$categories',
    subcategories= '$subcategories',
    title= '$title',
    author= '$author',

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
   
}

if(isset($_POST['saveCategory']))
{
    $category = validate($_POST['category']);
    $description = validate($_POST['description']);
    
    $query = "INSERT INTO categories (category, description)
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
    $category = validate($_POST['category']);
    $description = validate($_POST['description']);
    
    $query = "UPDATE categories SET
    category='$category',
    description ='$description'
    WHERE id='$categoryId'
    ";


$result = mysqli_query($conn, $query);
    if($result){
        redirect('categories.php?id='.$categoryId, 'Category Updated Successfully');
    }else{
        redirect('categories-edit.php?id='.$categoryId, 'Something went Wrong');
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
            redirect('author.php', 'User/Admin Updated Successfully');
        }else{
            redirect('author.php', 'Something went wrong');
            
        }
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

if(isset($_POST['saveSubcategory']))
{
    $name = validate($_POST['subcategory']);
   
    
    if($name !='' )
    {
        $query = "INSERT INTO subcategory (subcatname)
                  VALUES ('$name')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('sub-categories.php', 'Subcategory Added Successfully');
        }else{
            redirect('sub-categories-create.php', 'Something went wrong');
            
        }
    }
    else{
        redirect('sub-categories-create.php', 'Please fill the input fields');
    }

}



if(isset($_POST['saveBooks'])) {
    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $publishers = validate($_POST['publishers']);

    // Handle multiple authors
    $authors = validate($_POST['author']);
    

    if($_FILES['coverImage']['size'] > 0) {
        $coverImage = $_FILES['coverImage']['name'];
        $path = "../assets/uploads/books/";

        $imgExt = pathinfo($coverImage, PATHINFO_EXTENSION);
        $filename = time(). '.' .$imgExt;
        $finalImage = 'assets/uploads/books/'.$filename;
    } else {
        $finalImage = NULL;
    }

    if($_FILES['ebookUpload']['size'] > 0) {
        $ebookUpload = $_FILES['ebookUpload']['name'];
        $pdfPath= "../assets/uploads/pdf/";
        $pdfExt = pathinfo($ebookUpload, PATHINFO_EXTENSION);
        $filename1 = time(). '.' .$pdfExt;
        $finalPdf = 'assets/uploads/pdf/'.$filename1;
    } else {
        $finalPdf = NULL;
    }

    $description = validate($_POST['description']);
    $status = isset($_POST['status']) && $_POST['status'] == '1' ? '1' : '0';

    // Inserting books information
    $query = "INSERT INTO books (categories, subcategories, title, publishers, coverImage, ebookUpload, description, status) VALUES ('$categories', '$subcategories', '$title', '$publishers', '$finalImage', '$finalPdf', '$description', '$status')";

    $result = mysqli_query($conn, $query);

    if($result) {
        
        foreach($author as $item){
            $query ="INSERT INTO books (author) VALUES ($item)";
            $result = mysqli_query($conn, $query);

        }

        // Moving uploaded files
        if($_FILES['coverImage']['size'] > 0) {
            move_uploaded_file($_FILES['coverImage']['tmp_name'], $path.$filename);
        }
        if($_FILES['ebookUpload']['size'] > 0) {
            move_uploaded_file($_FILES['ebookUpload']['tmp_name'], $pdfPath.$filename1);
        }

        redirect('books.php', 'Book Added Successfully');
    } else {
        redirect('books.php', 'Something went Wrong');
    }
}

if(isset($_POST['updateBooks']))
{
    $bookId = validate($_POST['bookId']);
    $categories = validate($_POST['category']);
    $subcategories = validate($_POST['subcategory']);
    $title = validate($_POST['title']);
    $author = validate($_POST['author']);

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
    $status = validate($_POST['status'])== true ? '1' : '0';

    $query = "UPDATE books SET
    categories='$categories',
    subcategories= '$subcategories',
    title= '$title',
    author= '$author',

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
   
}
























?>
