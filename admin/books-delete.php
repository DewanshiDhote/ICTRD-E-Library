<?php
require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $bookId = validate($paraResult);

    $book = getById('books',$bookId);
    if($book['status']==200){

       $bookDeleteRes = deleteQuery('books',$bookId);
       if($bookDeleteRes){

        $deleteImage = "../".$book['data']['coverImage'];
        if(file_exists($deleteImage)){
            unlink($deleteImage);
        }
        $deletePdf = "../".$book['data']['ebookUpload'];
        if(file_exists($deletePdf)){
            unlink($deletePdf);
        }


        redirect('books.php','Book Deleted Successfully');
       }
       else{
        redirect('books.php','Something went wrong');

       }
    }else{
        redirect('books.php',$book['message']);

    }
}else{
    redirect('books.php',$paraResult);

}

?>