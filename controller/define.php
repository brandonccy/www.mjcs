<?php
$row="";$webTitle="WebbyCMS";
$systemError="";$systemSucces="";
if(empty($_SESSION["systemError"])){
	$_SESSION["systemError"]="";
}
if(empty($_SESSION["systemSucces"])){
	$_SESSION["systemSucces"]="";
}
$page="";
if(isset($_GET["page"])&&!empty($_GET["page"])){
	$page=$_GET["page"];
}
if($page==""){
	$page="home";
}
$cate="";
if(isset($_GET["cate"])&&!empty($_GET["cate"])){
	$cate=$_GET["cate"];
}
$action="";
if(isset($_GET["action"])&&!empty($_GET["action"])){
	$action=$_GET["action"];
}
$id="";
if(isset($_GET["id"])&&!empty($_GET["id"])){
	$id=$_GET["id"];
}
$form="";
if(isset($_POST["form"])&&!empty($_POST["form"])){
	$form=$_POST["form"];
}
$token="";
if(isset($_POST["token"])&&!empty($_POST["token"])){
	$token=$_POST["token"];
}

$admin_email="customerservice@mjcs.my";
/* Pre Defined Variables for Date & Time - This will used for Token generation */
$Today=date("Y-m-d");
$Day=date("d");
$Month=date("m");
$Year=date("Y");
$Hour=date("g");
$Minute=date("i");
$Seconds=date("s");
$Time=date("g:i A");

$Token=md5($Today."webbycms".uniqid().$Time);

$emailBodyTemplate='
<center style="width: 100%; background: #FFF;">
<!-- Visually Hidden Preheader Text : BEGIN -->
<div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
    (Optional) This text will appear in the inbox preview, but not the email body.
</div>
<!-- Visually Hidden Preheader Text : END -->

<!--    
    Set the email width. Defined in two places:
    1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
    2. MSO tags for Desktop Windows Outlook enforce a 680px width.
    Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I&apos;ve found that 680px is a good width. Change with caution.  
-->
<div style="max-width: 680px; margin: auto;">
    <!--[if mso]>
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
    <tr>
    <td>
    <![endif]-->

    <!-- Email Header : BEGIN -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
        <tr>
            <td style="padding: 20px 0; text-align: center">
                <img src="http://mjcs.my/images/headerLogo.png" width="200" height="50" alt="alt_text" border="0" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
            </td>
        </tr>
    </table>
    <!-- Email Header : END -->
    
    <!-- Email Body : BEGIN -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
        
        <!-- Hero Image, Flush : BEGIN -->
        <tr>
            <td bgcolor="#ffffff">
                <img src="http://www.mjcs.my/assets/images/home-bg.jpg" width="680" height="" alt="alt_text" border="0" align="center" class="fluid" style="width: 100%; max-width: 680px; background: #dddddd; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
            </td>
        </tr>
        <!-- Hero Image, Flush : END -->

        <!-- 1 Column Text + Button : BEGIN -->
        <tr>
            <td bgcolor="#ffffff">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td style="padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                            Thank you for sending us service request!<br>
                            We will provide our quotation of service as soon as posible.
                            <br><br>
                            <!-- Button : Begin -->
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                    <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                        <a href="http://www.mjcs.my" style="background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">Go to MJCS.MY</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!-- Button : END -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- 1 Column Text + Button : BEGIN -->

        <!-- Clear Spacer : BEGIN -->
        <tr>
            <td height="40" style="font-size: 0; line-height: 0;">
                &nbsp;
            </td>
        </tr>
        <!-- Clear Spacer : END -->

    </table>
    <!-- Email Body : END -->
  
    <!-- Email Footer : BEGIN -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
        <tr>
            <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                MJ Cleaning Solutions Sdn Bhd (1129136-A)<br>
                <span class="mobile-link--footer">No. 64-1, Jalan Mutiara Barat 6,<br> Taman Taynton View,<br> Cheras 56000 Kuala Lumpur<br>
                </span><br><span class="mobile-link--footer">customerservice@mjcs.my</span>
            </td>
        </tr>
    </table>
    <!-- Email Footer : END -->

    <!--[if mso]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>
</center>
';
?>
