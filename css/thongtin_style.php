<?php
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
/* CSS Document */
* {
    margin: 0;
    padding: 0;
}
@font-face {
    font-family: WorkSans;
    src: url(../fonts/WorkSans.ttf);
}
html {
    font-family: WorkSans;
}
.thongtin {
    margin-top: 120px;
    padding: 50px 70px;
	background: url("../images/thongtin/z2941375122902_a6150b4e0a77570bb422c456773d9f8a.jpg") no-repeat center fixed
}
.khung{
    width:30%;
	border-radius: 15px;
	background-color: rgba(255,255,255,0.5); 
	padding: 5% 10%;
	margin: 0 30%;
}
.dangxuat_button{
    margin-top:20px;
    background-color:grey;
    color:white;
    border-radius:10px;
    width:120px;
    height:30px;
	text-align: center
   
}
.dangxuat_button_text
{
    font-size:18px;
    font-weight:bolder;

}