<?php
    require 'connect.php';
    if(isset($_POST['btn-Reg'])){
        $fullname = $_POST['fullname'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $place = $_POST['place'];
        $time = $_POST['time'];
        if(!empty($fullname)&&!empty($telephone)&&!empty($email)&&!empty($place)&&!empty($time)){

            $sql = "INSERT INTO `tbl_tour` (`hoten`, `sdt`,`email`, `diemden`, `giokhoihanh`) VALUES('$fullname', '$telephone', '$email', '$place', '$time')";

            if($conn->query($sql)===TRUE){
                header("Location: home.php");
            }
            else{
                echo "Lỗi {$sql}".conn->erorr;
            }
        }
        else{
            echo "Bạn cần nhập đầy đủ thông tin";
        }
    }
?>