<?php

// Check email validation for php

use function Backend\saveEmail;

require('C:\xampp\htdocs\junior_test\Backend\saveEmail.php');
$emailErr = "";
function checkemail($str)
{
    if( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $str))
    {
        return false;
    }
    else {return true;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!checkemail($_POST["email"]))
    {
        $emailErr = "Please provide valid email";
    } else
    {
        saveEmail($_POST["email"]);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Junior_Test </title>
	<link rel="stylesheet" href="Styles/Text.css" />
	<link rel="stylesheet" href="Styles/Containers.css" />
	<link rel="stylesheet" href="Styles/Social.css" />
	<link rel="stylesheet" href="Styles/Heading.css" />
	<link rel="stylesheet" href="Styles/Terms.css" />
	<link rel="stylesheet" href="Styles/Input.css" />
	<script defer src="js/email_validations.js"></script>
</head>
<body>

        <noscript>      <!-- form when Js is disabled -->
            <form  name="form" method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
                <input class="email_input" id="email_input" type="text" name="email"
                       placeholder="Type your email adress here..."  value="">
                <input class="Arrow" value="" type="submit"></input>
            </form>

        </noscript>

        <div id="hideThisFromNonJs" style="display:none">  <!-- form when Js is enabled -->
            <form  name="form" action="Backend/saveEmail.php" method="post" onsubmit="return validateemail()">
                <input class="email_input" id="email_input" type="text" name="email"
                       placeholder="Type your email adress here..."  >
                <input class="Arrow" value="" type="submit"></input>
        </div>

            <div class="container">
                <noscript>   <!-- form when Js is disabled -->
                <div class="TOS">
                    <label class="container_checkbox">
                        <input type="checkbox" id="checkbox">
                        <span class="checkmark"></span>

                    </label>
                    <div class="TOS_txt">
                        I agree to  <a href="#" >terms of service</a>
                        <p id="email_message"></p>
                        <noscript>
                            <p><?php echo $emailErr;?></p>
                        </noscript>
                    </div>
                </div>
                </noscript>

                <div class="container">
                <div class="TOS">
                    <label class="container_checkbox">
                        <input type="checkbox" id="checkbox" onclick="checkBox()">
                        <span class="checkmark"></span>

                    </label>
                    <div class="TOS_txt"> <!-- form when Js is enabled -->
                        I agree to  <a href="#" >terms of service</a>
                        <p id="email_message"></p>
                    </div>
                </div>



                <div id="hideThisFromNonJs" style="display:none"> <!-- hides form when Js is disabled -->
                        <div class="TOS">
                            <label class="container_checkbox">
                                <input type="checkbox" id="checkbox" onclick="checkBox()">
                                <span class="checkmark"></span>

                            </label>
                        <div class="TOS_txt">
                            I agree to  <a href="#" >terms of service</a>
                        <p id="email_message"></p>
                        <noscript>
                            <?php
                            $message = "Please enable Javascript";
                            echo "<p>{$message}</p>";
                            ?>
                        <!--<p> Please enable Javascript</p>-->
                        </noscript>
                        </div>
                    </div>
                </div>
                </div>
    </form>

<script type="text/javascript">
    document.getElementById('hideThisFromNonJs').style.display='block';
</script>



<span class="About_txt">
<a href="#" style="text-decoration:none;">About</a>
</span>

<span class="How_works">
<a href="#" style="text-decoration:none;">How it works</a>
</span>

<div class="Contact">
<a href="#" style="text-decoration:none;">Contact</a>
</div>	
		<div class="Input">

				<div class="Line">
			</div>
		</div>
			<h1> Subscribe to newsletter </h1>
			<h3> Subscribe to our newsletter and get 10% discount on pineapple glasses. </h3>	
	<div class="Top_bar">
		<div class="Pineapple_container">
			<div class="Pineapple_logo">
				<img src="Images/logo_pineapple.svg" alt="Pineapple logo">
			</div>
			
		</div>
	</div>

		<div class="Social_icon_line">

		</div>

		<div class="Social_Icons">
	
			<a href="#">
			<div class="Facebook">
				<div class="FB_base">
					<div class="FB_icon">
					</div>
				</div>
			</div>
			</a>

			<a href="#">
			<div class="Instagram">
				<div class="IG_base">
					<div class="IG_icon">
					</div>
				</div>
			</div>
			</a>
			
			<a href="#">
			<div class="Twitter">
				<div class="TW_base">
					<div class="TW_icon">
					</div>
				</div>
			</div>
			</a>

			<a href="#">
			<div class="YouTube">
					<div class="YT_base">
						<div class="YT_icon">

						</div>
					</div>
			</div>
			</a>
		</div>
	</div>

	<div class="grid_pineapple">
		<img src="Images/Summer.jpg" alt="Summer Pineapples">
	</div>
</noscript>
</body>
</html> 