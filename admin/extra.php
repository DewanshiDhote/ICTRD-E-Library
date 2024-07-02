$category =$_POST['categories'];
$sql="SELECT subcatname FROM subcategory where catid='".$category."'";
$result=mysqli_query($conn, $sql);
$output ='<option> Select Subcategory </option>';
while($data=mysqli_fetch_array($result))
{
    $output.="<option>".$data['subcatname']." </option>";
}


$authorQuery = "INSERT INTO author (name) VALUES ('$author')";
        $authorResult = mysqli_query($conn, $authorQuery);
        if($authorResult) {
            redirect('books.php', 'Book and Author Added Successfully');
        } else {
            redirect('books.php', 'Book Added Successfully, but Error in Adding Author');
        }
    } else {
        redirect('books.php', 'Something went Wrong');
    }

    include 'db_connection.php';

if(isset($_POST['category_id'])){
  $category_id = $_POST['category_id'];
  
  // Fetch subcategories based on selected category
  $sql = "SELECT * FROM subcategory WHERE categoryid = $category_id";
  $result = mysqli_query($conn, $sql);
  $data = array();
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  }
  echo json_encode($data);
}
?>