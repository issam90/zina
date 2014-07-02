<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: ZINA ::</title>

<style>
a{ text-decoration:none; color:#000}
a:hover{ text-decoration:none; color:#000}

#m1{width:150px; height:60px; text-align:center; background-image:url(images/bg_menu.jpg); padding-top:35px; float:right; font-size:16px; font-family:Tahoma, Geneva, sans-serif; font-weight:bold}
#m1:hover{ background-image:url(images/bg_1.jpg)}

#m2{width:150px; height:60px; text-align:center; background-image:url(images/bg_menu.jpg); padding-top:35px; float:right; font-size:16px; font-family:Tahoma, Geneva, sans-serif; font-weight:bold}
#m2:hover{ background-image:url(images/bg_2.jpg)}

#m3{width:150px; height:60px; text-align:center; background-image:url(images/bg_menu.jpg); padding-top:35px; float:right; font-size:16px; font-family:Tahoma, Geneva, sans-serif; font-weight:bold}
#m3:hover{ background-image:url(images/bg_3.jpg)}

.bb{ width:220px; float:right; margin:5px}

.tt{ text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:16px; font-weight:bolder; color:#FFF; padding:3px }

.tex{ text-align:justify; font-family:Tahoma, Geneva, sans-serif; font-size:14px; font-weight:600; padding:10px }
</style>


<style>
#submit{
	background-color: #CCC;
	color:#666;
	border: 1px solid  #666;
}

#submit:hover{
	background-color:#FFF;
	color:#666;
	border: 1px solid #666;
	cursor:pointer;
}

</style>

</head>

<body style="margin:0; background-color:#f9f7f8; direction:rtl; text-align:right">

   <div style="position:absolute">
     <object classid='clsid:D27CDB6E-AE6D-11CF-96B8-444553540000' id='obj1' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0' border='0' width='1' height='1'>
	<param name='movie' value='images/music.swf'>
	<param name='quality' value='High'>
	<embed src='images/music.swf' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' name='obj1' width='1' height='1'></object>  

	</div>

<div id="master" style="width:950px; margin:0 auto 0 auto;">

    <div id="logo" style="width:327px; height:156px; float:right"><img src="images/logo.png" width="327" height="156" /></div>
    <div id="menu" style="height:95px; float:right; margin:20px">
    	<a href="index.php"><div id="m3">الرئيسية</div></a>
        <a href="products.php"><div id="m2">المنتجات</div></a>
        <a href="contact.php"><div id="m1">اتصل بنا</div></a>
    </div>
    
    <br clear="all" />

 <div style="width:660px; background-color:#FFF; margin:50px auto 30px auto; z-index:+500; position:relative; border: solid 1px #CCC; filter:alpha(opacity=90); opacity:0.9; padding:20px ">
 
        <div style="width:490px; margin:30px 10px 30px 10px;">
            <span style="font-size:22px; color:#000">اتصل بنا :</span>
            <br />
        
                <span style="font-size:14px; color:#5b5849">
                    <form action="" method="post" >
                    <table style=" margin:20px">
                        <tr>
                            <td>الاسم</td>
                            <td><input class="input_text" type="text" name="name" value="<?PHP echo $name;  ?>" /></td>
                        </tr>
                        <tr>
                            <td>البريد الإلكتروني</td>
                            <td><input class="input_text" type="text" name="email" value="<?PHP echo $email;  ?>" /></td>
                        </tr>
                        <tr>
                            <td>الرسالة</td>
                            <td><textarea class="input_message" name="msg" cols="50" rows="10"><?PHP echo $msg;  ?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input id="submit" type="submit" value="ارسال رسالة" name="send"/></td>
                        </tr>
                    </table>
                    </form>
                </span>
        
        </div>
 
<?PHP

if ($_POST){
    
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $msg       = $_POST['msg'];
    
	
	if (empty($name))
    {
         echo '<span style="font-size:14px; color:#9b1518">الرجاء ملء حقل الاسم</span>'."<br />";
    }
    if (empty($email))
    {
        echo '<span style="font-size:14px; color:#9b1518">الرجاء ملء حقل البريد الإلكتروني</span>'."<br />";
    }
	
	if (empty($msg))
    {
        echo '<span style="font-size:14px; color:#9b1518">الرجاء كتابة رسالة</span>'."<br />";
    }
	
	$to = "info@solitaire-sy.com";

	if ($name && $email && $msg)
	{

    $message   =  '<html><center><h2>'."$name".'</h2><br>'."$email".'<br>'."$msg".'<br></html>';

    $headers   =  'MIME-Version: 1.0' . "\r\n"; 
    $headers  .=  'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mail = @mail($to, $subject, $message, $headers);
	
	
if ($mail)
{
    echo '<span style="font-size:14px; color:green">تم ارسال الرسالة بنجاح</span>';
}
else
{
    echo '<span style="font-size:14px; color:#9b1518">فشل في ارسال الرسال</span>';
}


	}


}
echo "<br />";
?>
 
 
 </div>

 <div style="width:660px;  background-color:#FFF; margin:30px auto 50px auto; z-index:+500; position:relative; border: solid 1px #CCC; filter:alpha(opacity=90); opacity:0.9; padding:20px; color:#333; font-family:Tahoma, Geneva, sans-serif">
 	
    سوريا - دمشق - حريقة <br />
    
    <span style="color:#000; font-weight:bold">مكتب :</span> 2229807 - 2232886<br />
    
    <span style="color:#000; font-weight:bold">صالة :</span> 2230557<br />
    
    <span style="color:#000; font-weight:bold">جوال :</span> 0944688082<br />
    
    <span style="color:#000; font-weight:bold">بريد إلكتروني :</span> info@ziena-fashion.com 
    
    
    
 </div>


    <div id="footer" style="width:950px; height:50px; background-color:#d1cdcc; margin: 0 auto 0 auto; position: relative">
        
        <div style="width:304px; height:20px; position: absolute; left: 335px; top: 15px; font-size:12px; font-family:Tahoma, Geneva, sans-serif">CopyRight Zina Fashion - Design By Al Nayzak Company</div>
        
      <div style="width:114px; height:20px; position: absolute; left: 822px; top: 17px; font-size:12px; font-family:Tahoma, Geneva, sans-serif">أنت الزائر رقم : <?PHP include("count.php"); ?></div>
        
  </div>
    
</div>
    
    
</div>

</body>
</html>