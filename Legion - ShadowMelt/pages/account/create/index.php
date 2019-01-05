<html>
<body>
<header>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>LegionWoW</title>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="/images/icon.html" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div id="header-vid">
<video autoplay="true" loop="loop">
		    <source type="video/mp4" src="video/bg.mp4">
  		</video>
</div>
<div id="nav">
<div class="container">
<div id="logo">
<a href="index.php"><img src=""></a> <!-- Possible server logo --> 
</div>
<div class="right">
<ul>
	<li><a href="/index.php">Home</a></li>
	<li><a href="/forum">Forum</a></li>
	<li><a href="/download.php">Downloads</a></li>
	<li><a href="/pages/account/create/">Register</a></li>
	<li><a href="http://putadonationlinkhere.com">Donate</a></li> 
</ul>
		</div>
	</div>
</div>

</div>
</div>
</div>
<div class="video-overlay">
<div class="container">
<div class="right">
<div class="info-box">
<h1>Welcome to <span>LegionWoW</span>!</h1>
<p><br>The Tomb of Sargeras has been reopened, and the demons of the Burning Legion pour into our world. Their full, terrifying might is fixed on summoning the Dark Titan to Azeroth—and they’ve already located the key to his return.</p>
<br> 
<p>With the Alliance and Horde devastated, only you can take up Warcraft’s most legendary artifacts, scour the ancient Broken Isles for relics of the Titans, and challenge the Legion before Azeroth’s last hope dies.</p>
<br>
<p>Steel yourself, champion. Extinction is imminent.</p>	
</div>
	</div>
		</div>
			</div> 
				</header>
		
<div class="content">
<div class="container row">
<div id="left-content">


<div class="post_wrap">
					<div class="news">
					<br>
					<br>
					<br>
					<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign-Up for LegionWoW!<h1>
				<!-- Main -->
				<?php
				// We need these.
				require_once("config.php");
				require_once("SOAPRegistration.php");
				// Initialize session and variables.
				$messages = Array();
				$showForm = true;
				// If form was submitted, carry out the registration.
				if(!empty($_POST["submit"]))
				{
				    $reg = new SOAPRegistration();
				    $messages = $reg -> getMessages();
				    $showForm = $reg -> showForm();
				}
				$messagesDisplay = '';
				foreach($messages as $msg)
				{
				    $messagesDisplay .= '<div class="errors">'.$msg.'</div>';
				}
				?>

				                <tr>
				            </tr>
				            <tr>
				                <td>
				                </td>
				            </tr>
				            <tr>
				                <td>
				                    <?php
				                    echo $messagesDisplay;
				                    if ($showForm)
				                    { ?>
				                    <form action="" method="post" name="reg">
				                        <table class="form">
				                            <tr>
				                                <td align="right">
				                                    E-mail Address:
				                                </td>
				                                <td align="left">
				                                    <input name="accountname" type="text" maxlength="32" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Password:
				                                </td>
				                                <td align="left">
				                                    <input name="password" type="password" maxlength="16" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Confirm password:
				                                </td>
				                                <td align="left">
				                                    <input name="password2" type="password" maxlength="16" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Confirm e-mail address:
				                                </td>
				                                <td align="left">
				                                    <input name="email" type="text" maxlength="254" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Expansion:
				                                </td>
				                                <td align="left">
				                                    <select name="expansion">
				                                        <option selected value="2">Legion</option>
				                                    </select>
				                                </td>
				                            </tr>
				                            <tr>
				                                <td colspan="2" align="center">
				                                    <input type="submit" class="sbm" value="Register" name='submit' />
				                                </td>
				                            </tr>
				                        </table>
				                    </form>
				                    <?php
				                    }
				                    ?>
						<p></p>
					</div>
			</div>


</div>
	<div id="right-content">
  <br>
<img src="images/box.png"></div> 

</div>
</div>
<footer>
	<div id="footer">
		<div class="container row">
			<div class="one-third">
<img id="footicon" src="images/links.png"><h3>Support<span> LegionWoW</span></h3>
<a href="http://putavotelinkhere.com">Vote Link 1</a>
<a href="http://putavotelinkhere.com">Vote Link 2</a>
<a href="http://putadonationlinkhere.com">Donate</a>
</div>
<div class="one-third">
<img id="footicon" src="images/links2.png"><h3>Contact<span> Us</span></h3>
<a href="contact@legionwow.com">E-mail</a>
<a href="https://discord.gg/xxxx">Discord</a>
<a href="forum/">Forum</a>
</div>
<div class="one-third about">
<img id="footicon" src="images/about.png">
<h3>Why play on <span>LegionWoW</span> ?</h3>
<p><b>LegionWoW</b> is a professional managed private server, looking to become the best one out there!</p>
</div>
</div>
<div id="footer2">
<div class="container">
<p>Copyright <span>LegionWoW</span> &copy; 2016, Website made by: Brian8544</p>
</div>
</div>
</footer>
</body>
</html>
