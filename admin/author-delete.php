<?php
require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $authorId = validate($paraResult);

    $author = getById('author',$authorId);
    if($author['status']==200){

       $authorDeleteRes = deleteQuery('author',$authorId);
       if($authorDeleteRes){
        redirect('author.php','Author Deleted Successfully');
       }
       else{
        redirect('author.php','Something went wrong');

       }
    }else{
        redirect('author.php',$author['message']);

    }
}else{
    redirect('author.php',$paraResult);

}

?>