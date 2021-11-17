<?php
$servername = "localhost";
$username = "root";

$password = "100201";
$dbname = "DEMO";

$conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = md5($_POST['pwd']);
    $result=mysqli_query($conn,"SELECT * FROM dangky where username='$username' and password = '$password'");
    if (mysqli_num_rows($result)==0)
    {
        header("Location: ../web/dangnhap.php?user_found=0");
    }
    else
    {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        if($row['TinhTrangThanhToan']) 
        {
            $row['TinhTrangThanhToan']='đã';
        }
        else $row['TinhTrangThanhToan']='chưa';
        if(!empty($_POST["remember"])) {
            setcookie ("member_login",$_POST["member_name"],time()+ 600,"/");
        }
        session_start();
        $_SESSION['username'] = $row['username'] ;
        $_SESSION['email'] = $row['email'] ;
        $_SESSION['tel'] = $row['tel'] ;
        $_SESSION['Khoahoc'] = $row['Khoahoc'] ;
        $_SESSION['TinhTrangThanhToan'] =$row['TinhTrangThanhToan'];
        header("Location: ../web/thongtin.php?'$username'");
		
    }
}
?>