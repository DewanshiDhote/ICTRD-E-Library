<?php
require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $subcategoryId = validate($paraResult);

    $subcategory = getById('subcategories',$subcategoryId);
    if($subcategory['status']==200){

       $subcategoryDeleteRes = deleteQuery('subcategories',$subcategoryId);
       if($subcategoryDeleteRes){

        redirect('sub-categories.php','subcategory Deleted Successfully');
       }
       else{
        redirect('sub-categories.php','Something went wrong');

       }
    }else{
        redirect('sub-categories.php',$subcategory['message']);

    }
}else{
    redirect('sub-categories.php',$paraResult);

}

?>