<?php
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
        $sql="INSERT INTO DIENTHOAI(`Ma dien thoai`, `Ten dien thoai`, `Tinh nang`, `Gia`, `Hang`) VALUES ('$id', '"
        .$name.
        "', '"
        .$utility.
        "', "
        .$price.
        ", '"
        .$cat.
        "')";
        if($conn->query($sql)==TRUE){
            echo "<script>alert('Thành công.')</script>";
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