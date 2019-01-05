<html>
<body>
<header>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>LegionWoW</title>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="images/icon.html" />
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
<a href="index.php"><img src="logo.png"></a> <!-- Possible server logo --> 
</div>
<div class="right">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="/forum">Forum</a></li>
	<li><a href="download.php">Downloads</a></li>
	<li><a href="/pages/account/create/">Register</a></li>
	<li><a href="http://putadonationlinkhere.com">Donate</a></li> 
</ul>
		</div>
	</div>
</div>

<div class="video-overlay">
	<div class="container">
		<div class="right">
<br>
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
<img id="newsicon" src="images/news.png"><h2>LegionWoW - <span>news</span></h2>
<div class="post">
<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM news WHERE `id` = '1'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h4>'.date ('d-M-Y', $output['date']).'</h4>';
							echo '<p>';
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
</p>
</div>

<div class="post">
<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM news WHERE `id` = '1'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h4>'.date ('d-M-Y', $output['date']).'</h4>';
							echo '<p>';
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
</p>
</div>

<div class="guides_wrappers" style="margin-top : 15px;">
		<a class="guides" href="https://www.rpg-paradize.com/serverlink"  target=_blank style="background-image : url('images/article/rpg.jpg'); float:left;"><div class="textes"><div class="titres">Vote for us!</div><div class="descs">Voting gives unique rewards.	</div></div></a>
		
		<a class="guides" href="https://www.facebook.com/serverlink"  target=_blank style="background-image : url('images/article/facebook.jpg'); float:right;"><div class="textes"><div class="titres">Facebook</div><div class="descs">Don't forget to like us on Facebook!</div></div></a>
	</div>
</div>

<div id="right-content">
<img id="newsicon" src="images/server.png"><h2>Our <span>Realms</span></h2><br>
<div id="status">
<p>Sargeras<br/><img src="images/legion.png"></p>
<p id="online"><font color="#c0392b">Offline!</font>
<br/><span id="players">0 players</span></p>
</div>


<div class="sidebar">
                    
                    <div id="sidebar_haut">
                      <img id="newsicon" src="images/server.png"><h2>Important<span> News</span></h2>
<br>

                        <div class="focus_guides well">
                            <div>
								
								<a href="download.php" style="background-image : url('images/banner/legion.jpg')">
                                    <span class="texte">
                                        <h3><strong>Download</strong><br>Click here to download our client!</h3>
                                    </span>
                                </a>
								
                               <a href="LinkToRecruitPage" style="background-image : url('images/banner/aide.jpg')">
                                    <span class="texte">
                                        <h3><strong>Recruitment!</strong><br>We are looking for developers.</h3>
                                    </span>
                                </a>
								
                            </div>
                        </div>
					</div>
</div>
<br>
<div class="sidebar">
                    
                    <div id="sidebar_haut">
                      <img id="newsicon" src="images/server.png"><h2>LegionWoW <span>Teaser!</span></h2>
<br>

                        <iframe width="320" height="180" src="https://www.youtube.com/embed/eYNCCu0y-Is" frameborder="0" allowfullscreen></iframe>
					</div>
</div>
<br>
<br>
</div> 
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
