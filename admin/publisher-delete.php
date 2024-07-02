<?php
require '../config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $publisherId = validate($paraResult);

    $publisher = getById('publisher',$publisherId);
    if($publisher['status']==200){

       $publisherDeleteRes = deleteQuery('publisher',$publisherId);
       if($publisherDeleteRes){
        redirect('publisher.php','Publisher Deleted Successfully');
       }
       else{
        redirect('publisher.php','Something went wrong');

       }
    }else{
        redirect('publisher.php',$publisher['message']);

    }
}else{
    redirect('publisher.php',$paraResult);

}

?>