<?php
if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$email = $_POST['email'];
$mbno = $_POST['mbno'];
$noemp = $_POST['noemp'];
$to = "shanmugaraj.r@itilite.com,$email";
$subject = "Itilite Contact Form Email";

    $message = "
    <html>
        <head>
            <title>New email is received from $name.</title>
        </head>

        <body>
            
            <table>
                <tr>
                    <th>Company Email</th>
                    <th>Email</th>
                    <th>Mobile number</th>
                   <th> No. Of Employees</th>
                </tr>
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                      <td>$mbno</td>
                        <td>$noemp</td>
                </tr>
            </table>
        </body>
    </html>
    ";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
	echo "<span style='color:green; font-weight:bold;'>
	Thank you for contacting us, we will get back to you shortly.
	<a href='javascript:void(0)' type='button' data-toggle='modal' data-target='#myModalbook' class='gfhgf'> Book Free Demo</a></span>";
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
	}
}
?>