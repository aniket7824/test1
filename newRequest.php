<html>
<head>
<link rel="stylesheet" href="atn.css">
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylemenu.css">
<link rel="icon" type="image/png" href="img/attendancetrackericon.png"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>

<title>Send a Request</title>
<script>


function submitted()
{
    alert("Your request successfully submitted. Please check your email for future references.");
    window.location = 'login.php'
}

function RetainAfterReload(fname,lname,roll,email,sec,stream)
{
    roll= parseInt(roll);
    document.getElementById('email2').value= email; 
    document.getElementById('email').value= email; 
    document.getElementById('lname').value= lname;
    document.getElementById('fname').value= fname;
    document.getElementById('roll').value= roll;
    document.getElementById('sec').value= sec;
    document.getElementById('stream').value=stream;
    document.getElementById("roll").focus();
} 
    function SameCompare(k)
{
    if (k=='1')
    {
        
        var p1=document.getElementById("email").value;
    var p2=document.getElementById("email2").value;
      var divpass=document.getElementById("match");
      var divbtn=document.getElementById("button");
    if(p1=="" || p2=="")
    {
    divpass.innerHTML="";
    divbtn.innerHTML="<input type='submit' name='sbt' class='LoginButton' value='Send Registration Request' style='width: 380px; font-family: Segoe UI; font-size: 25px; font-weight: normal;' disabled/>";
    
    }
    else
    {
    if(p1==p2)
    {
    divpass.innerHTML="&nbsp;<img src='img/tick_icon.png' width='20%' height='60%'/>&nbsp;<label style='font-family: Segoe UI; color:green;  font-size: 13px; font-weight: 40;'>Matched</label>";
    divbtn.innerHTML="<input type='submit' name='sbt' class='LoginButton' value='Send Registration Request' style='width: 380px; font-family: Segoe UI; font-size: 25px; font-weight: normal;' />";
    
    }
    else
    {
    divpass.innerHTML="&nbsp;<img src='img/cross_icon.png' width='15%' height='40%'/>&nbsp;<label style='font-family: Segoe UI; color:red;  font-size: 13px; font-weight: 20;'>Not matched</label>";
    divbtn.innerHTML="<input type='submit' name='sbt' class='LoginButton' value='Send Registration Request' style='width: 380px; font-family: Segoe UI; font-size: 25px; font-weight: normal;' disabled/>";
   
    }
    }
    }
    else
    {
    
     var divbtn=document.getElementById("button");
     divbtn.innerHTML="<input type='submit' name='sbt' class='LoginButton' value='Send Registration Request' style='width: 380px; font-family: Segoe UI; font-size: 25px; font-weight: normal;' disabled/>";
   
    }
   
}
function activeBtn()
{
    var divbtn=document.getElementById("button");
    divbtn.innerHTML="<input type='submit' name='sbt' class='LoginButton' value='Send Registration Request' style='width: 380px; font-family: Segoe UI; font-size: 25px; font-weight: normal;' />";
    alert("active fired");
}
</script>


<style> 
.mailget {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABClpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wUmlnaHRzOk1hcmtlZD0iVHJ1ZSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzI3NTdDRTExNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzI3NTdDRTIxNUFCMTFFMUE5NURCRkMwMEFDNjhEQUMiPiA8ZGM6cmlnaHRzPiA8cmRmOkFsdD4gPHJkZjpsaSB4bWw6bGFuZz0ieC1kZWZhdWx0Ij5DcmVhdGl2ZSBDb21tb25zIEF0dHJpYnV0aW9uIE5vbi1Db21tZXJjaWFsIE5vIERlcml2YXRpdmVzPC9yZGY6bGk+IDwvcmRmOkFsdD4gPC9kYzpyaWdodHM+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjcyNzU3Q0RGMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjcyNzU3Q0UwMTVBQjExRTFBOTVEQkZDMDBBQzY4REFDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+SoKR9AAAAH5JREFUeNpi/P//PwMlgImBQsDS39/fAKTrydTfyESBZhCoR/bCAig9AYgZceAFaGpRwiARKlEAxPOx2AYSS4CqSYSHAZoimEQCGh+rZmwGYDOEAZdmXAZgMwSrZnwGMKBpSMSZDghEUyLtUyIS+z+5eaGRAgc0Mg54bgQIMAAD7RsCMDpK7QAAAABJRU5ErkJggg==) no-repeat 10px 4px #FFF;
    height: 25px;
    width: 275px;
    border: 1px solid #848484;
    padding-left: 30px;
}
</style> 

</head>
<body>

<center><div style="height: 60px;width: 87%;border-radius: 15px;margin: 0.0em;background-color: darkblue;">
<center><FONT FACE="verdana" color="white" style="font-size: 48px;"><b>Attendance Tracker</b></FONT>
</center></center></div>
<div id='cssmenu'>
<ul>
   <li><a href='login.php'>Login</a></li>
   <li class='active'><a href='newRequest.php'>New Registration</a></li>
   <li><a href='help.php'>Help</a></li>
   <li><a href='contact.php'>Contact</a></li>
   </ul>
</div>
<form method="post" id="form1">
<center><br />
<div style="width: 1000px; border-radius: 10px; height: 470px; background-color: white;">
<label style="font-family: Berlin Sans FB; font-size: 8px;"><br /></label>

<label style="font-family: Berlin Sans FB; font-size: 22px;">
<label style="font-size: 24px; font-family: Segoe UI; padding: 5px;">Send a Registration Request</label><hr/>
<label style="font-size: 16px; color: red; font-family: Segoe UI; padding: 5px;">Please Note: Only B.Tech students of Institute of Engineering and Management(IEM) of the 2014-2018 batch can apply for registration.</label>
<br /><br />
<center><table style="width: 900px;">
<tr>
<td>First Name: </td><td> <input type="text" name="fname" id="fname"  required/></td>
<td>Last Name: </td><td> <input type="text" name="lname" id="lname" required/></td>
<td>Stream: </td><td> <select required name="stream" id="stream">
<option value="" disabled="true" selected="true" >-----Please Select-----</option>
<option value='cse100' >CSE</option>
<option value='it' >IT</option>
<option value='ece200' >ECE</option>
<option value='me300' >ME</option>
<option value='ee400' >EE</option>
</select></td>
</tr>






<tr>

<td>Section: </td><td><select required name="sec" id="sec" >
<option value="" disabled="true" selected="true" >-----Please Select-----</option>
<option value='A' >A</option>
<option value='B' >B</option>
<option value='C' >C</option>
</select></td>
<td>Roll No: </td><td><input type="number" name="roll" id="roll" min="1" required/></td>
</tr>
</table></center>
<div style="float: left; margin-left: 15px;">
<table>
<tr>
<td style="width: 130px;">Enter Email ID: </td><td style="width: 150px;"> <input type="email" id="email" name="email" oninput="SameCompare('1')" required/></td><td></td><td rowspan="2"></td></tr>
<tr>
<td style="width: 130px;">Confirm Email ID:</td><td style="width: 150px;"><input type="email" id="email2"  name="email2" oninput="SameCompare('1')" required/></td>
<td style="width: 130px;"><div id="match" style="height: 30px;width: 100px; float: left;"></div></td>
</tr>
</table>
</div>
<div class="g-recaptcha" data-sitekey="6LexfxkTAAAAAMNqarB8hh4ptibuO0ss2K7Dt3Wo" id="captcha"></div>

<br /><br /><br /><label style='font-family: verdana; font-size: 18px; color: red;' id="error">
<?php
$btnnotload=0;
	if(isset($_POST['sbt']))
    {
        $reloadWithSame=0;
        $name=$_POST['fname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $name=$name." ".$_POST['lname'];
        $streamcode=$_POST['stream'];
        $roll=$_POST['roll'];
        $section=$_POST['sec'];
        $email=$_POST['email'];
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
        
        //captcha part start
         $secret="6LexfxkTAAAAAISYy3785wII_-P8SuFAmpbnhKuR";   
         $ip = $_SERVER['REMOTE_ADDR'];
         $captcha = $_POST['g-recaptcha-response'];
         $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip?$ip");
         $captcharesult= json_decode($response,true);
         //captcha part end
         if($captcharesult['success'])
        {    
        if($streamcode=="cse100")
        {
            $id="100".$roll;
            $stream="CSE";
        }
        else if($streamcode=="it")
        {
            $id="$roll";
            $stream="IT";
        }
        else if($streamcode=="ece200")
        {
            $id="200".$roll;
            $stream="ECE";
        }
        else if($streamcode=="me300")
        {
            $id="300".$roll;
            $stream="ME";
        }
        else if($streamcode=="ee400")
        {
            $id="400".$roll;
            $stream="EE";
        }
        $host='mysql.hostinger.in';
        $user='u447284107_root';
        $pass='arka101';
        $dbname='u447284107_atn';
        $link = @mysql_connect($host, $user, $pass) or die("<br/><br/>MySQL server not found");//to establish connection
        @mysql_select_db($dbname,$link) or die("<br/><br/>Requested database not found");//to select proper databases
        $que="select id, email from user";
        $rs=@mysql_query($que,$link) or die("<br/><br/>Error in query. <br/>System generated error messege: ".mysql_error());
        $existid=0;
        $existmail=0;
        $existproposedid=0;
        $rid="r".$id;
        date_default_timezone_set('Asia/Kolkata');
        $requestid=$rid."D".date("dmY");
        $requestid=strtoupper($requestid);
        while($row=mysql_fetch_array($rs))
        {
           
            if($rid==$row[0])
            {
                 $existid=1;
            }
            if($email==$row[1])
            {
                 $existmail=1;
            }
            
        }
        $que="select * from pendreq";
        $rs2=@mysql_query($que,$link) or die("<br/><br/>Error in query. <br/>System generated error messege: ".mysql_error());
        while($row2=mysql_fetch_array($rs2))
        {
           
            if($id==$row2[1])
            {
                 $existproposedid=1;
                 break;
            }
        }
        if($existid==1)
        {
        $reloadWithSame=1;
        echo "You are already registered!!<br/>";
        }
        if($existmail==1)
        {
        $reloadWithSame=1;
        echo "Your email id. is already registered!!<br/>";
        }
        if($existproposedid==1)
        {
        $reloadWithSame=1;
        echo "You had already submitted a registration request. Your Request ID: $row2[0].<br/>Please check your email for updates.<br/>";
        }
        if($existid==0 && $existmail==0 && $existproposedid==0)
        {
            
            $que="select email from user where id = 'master'";
            $rs1=@mysql_query($que,$link) or die("<br/><br/>Error in query. <br/>System generated error messege: ".mysql_error());
            $row1=mysql_fetch_array($rs1);
            $message="Dear Admin,". PHP_EOL . PHP_EOL ."A new registration request is submitted.". PHP_EOL . PHP_EOL ."Request ID: $requestid". PHP_EOL . PHP_EOL ."----------Details of the user----------". PHP_EOL . PHP_EOL ."Full Name: $name". PHP_EOL ."Stream: $stream". PHP_EOL ."Section: $section". PHP_EOL ."Roll No: $roll". PHP_EOL ."Stream code: $streamcode". PHP_EOL ."Proposed ID: $id". PHP_EOL ."Email ID: $email". PHP_EOL . PHP_EOL . PHP_EOL ."Please review the application.". PHP_EOL . PHP_EOL ."Regards,". PHP_EOL ."Attendance Tracker". PHP_EOL ."by TECH 23.";
            $to      = "$row[0]";
            $subject = 'New registration application';
            $headers = 'From: 	Attendance Tracker <contact@attendancetracker.esy.es>' . "\r\n" .
            'Reply-To: contact@attendancetracker.esy.es' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
            $message1="Dear $name,". PHP_EOL . PHP_EOL ."Your new registration request is submitted successfully.". PHP_EOL . PHP_EOL ."Our admin will review your application. You will receive confirmation email if your registration become successful.". PHP_EOL . PHP_EOL ."Request ID: $requestid". PHP_EOL . PHP_EOL ."----------Details submitted by you----------". PHP_EOL . PHP_EOL ."Full Name: $name". PHP_EOL ."Stream: $stream". PHP_EOL ."Section: $section". PHP_EOL ."Roll No: $roll". PHP_EOL ."Email ID: $email". PHP_EOL . PHP_EOL ."For any feedback/support write us at contact@attendancetracker.esy.es and please mention your Request Id.". PHP_EOL . PHP_EOL ."Regards,". PHP_EOL ."Attendance Tracker". PHP_EOL ."by TECH 23.";
            $to1      = "$email";
            $subject1 = 'Your registration request received';
            $headers1 = 'From: 	Attendance Tracker <contact@attendancetracker.esy.es>' . "\r\n" .
            'Reply-To: contact@attendancetracker.esy.es' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to1, $subject1, $message1, $headers1);
            //echo $message1;
            $que="insert into pendreq values('$requestid','$id','$name','$email')";
            @mysql_query($que,$link) or die("<br/><br/>Error in query. <br/>System generated error messege: ".mysql_error());
            
            echo "<script>submitted()</script>";
        }
        else
        echo "For any support write us at <a href='mailto:contact@attendancetracker.esy.es' style='text-decoration: none; color: blue'>contact@attendancetracker.esy.es</a></label>";
       }
       else
       {
         echo 'Captcha verification failed'; 
        $reloadWithSame=1;
       }
       }
       else
        {
             echo 'Captcha verification failed'; 
        $reloadWithSame=1;
        }
    }
    else
    $btnnotload=1;
   
?>
</label>
<br /><br /><div id="button">
<?php
	if(isset($_POST['sbt']) && $reloadWithSame==1)
    {
       echo "<script>RetainAfterReload('$fname','$lname',$roll,'$email','$section','$streamcode');SameCompare('1');</script>";
       
    }
    if($btnnotload==1)
    echo "<script>SameCompare('0');</script>";
?>
</form>
</div></center>

<div style="float: right; border-radius: 5px; background-color: black; width: 350px;">
<center><span style="vertical-align: middle; color: white; font-size: 35px;">By Aniket for <img src="tech23.png" width="30%"/></span></center></div>



</body>
</html>	