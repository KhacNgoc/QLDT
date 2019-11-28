<?php
$idpr=$_POST['idpr'];
$id=$_POST['id'];
$name=$_POST['name'];
$utility=$_POST['utility'];
$price=$_POST['price'];
$cat=$_POST['cat'];
if(!empty($id) || !empty($name) || !empty($utility) || !empty($price) || !empty($cat)){
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'QLDT');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql="UPDATE DIENTHOAI SET `Ma dien thoai` = '".$id."', `Ten dien thoai` = '".$name."', `Tinh nang`= '".$utility."', `Gia` = '".$price."' , `Hang` = '".$cat."' WHERE  `id` = '".$idpr."'";
    // $sql="UPDATE Phong SET maloai=$cat, sophong='".$room."', sogiuong='".$bad."' WHERE maphong=$id";
    if($conn->query($sql)==TRUE){
        echo "<script>alert(' Thành công.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else echo "Error".$sql."<br>".$conn->error;
}
else{
    echo "All.";
    die();
}
$conn->close();
?>