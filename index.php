<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
eeeeee   \AMA NA FEATURE GRANKATA
?>
<!DOCTYPE html>
<html>
<head>
	<title>Macedonian Music</title>
	<style>
	html
{ height: 100%;}

*
{ margin: 0;
  padding: 0;}

body
{ font: normal .80em 'trebuchet ms', arial, sans-serif;
  background: #F5F5EE;
  color: #555;}

p
{ padding: 0 0 20px 0;
  line-height: 1.7em;}

img
{ border: 0;}

h1, h2, h3, h4, h5, h6 
{ color: #362C20;
  letter-spacing: 0em;
  padding: 0 0 5px 0;}

h1, h2, h3
{ font: normal 170% 'century gothic', arial;
  margin: 0 0 15px 0;
  padding: 15px 0 5px 0;
  color: #000;}

h2
{ font-size: 160%;
  padding: 9px 0 5px 0;
  color: #009FBC;}

h3
{ font-size: 140%;
  padding: 5px 0 0 0;}

h4, h6
{ color: #009FBC;
  padding: 0 0 5px 0;
  font: normal 110% arial;
  text-transform: uppercase;}

h5, h6
{ color: #888;
  font: normal 95% arial;
  letter-spacing: normal;
  padding: 0 0 15px 0;}

a, a:hover
{ outline: none;
  text-decoration: underline;
  color: #AEB002;}

a:hover
{ text-decoration: none;}

blockquote
{ margin: 20px 0; 
  padding: 10px 20px 0 20px;
  border: 1px solid #E5E5DB;
  background: #FFF;}

ul
{ margin: 2px 0 22px 17px;}

ul li
{ list-style-type: circle;
  margin: 0 0 6px 0; 
  padding: 0 0 4px 5px;
  line-height: 1.5em;}

ol
{ margin: 8px 0 22px 20px;}

ol li
{ margin: 0 0 11px 0;}


.left
{ float: left;
  width: auto;
  margin-right: 10px;}

.right
{ float: right; 
  width: auto;
  margin-left: 10px;}

.center
{ display: block;
  text-align: center;
  margin: 20px auto;}

#main, #logo, #menubar, #site_content, #footer
{ margin-left: auto; 
  margin-right: auto;}

#header
{ background: #323534 url(back.png);
  height: 177px;}

#logo
{ width: 880px;
  position: relative;
  height: 140px;
  background: transparent;}

#logo #logo_text 
{ position: absolute; 
  top: 10px;
  left: 0;}

#logo h1, #logo h2
{ font: normal 300% 'century gothic', arial, sans-serif;
  border-bottom: 0;
  text-transform: none;
  margin: 0 0 0 9px;}

#logo_text h1, #logo_text h1 a, #logo_text h1 a:hover 
{ padding: 22px 0 0 0;
  color: #FFF;
  letter-spacing: 0.1em;
  text-decoration: none;}

#logo_text h1 a .logo_colour
{ color: #E4EC04;}

#logo_text a:hover .logo_colour
{ color: #FFF;}

#logo_text h2
{ font-size: 120%;
  padding: 4px 0 0 0;
  color: #999;}

#menubar
{ width: 880px;
  height: 46px;} 

ul#menu
{ float: right;
  margin: 0;}

ul#menu li
{ float: left;
  padding: 0 0 0 9px;
  list-style: none;
  margin: 1px 2px 0 0;
  background: #5A5A5A url(tab.png) no-repeat 0 0;}

ul#menu li a
{ font: normal 100% 'trebuchet ms', sans-serif;
  display: block; 
  float: left; 
  height: 20px;
  padding: 6px 35px 5px 28px;
  text-align: center;
  color: #FFF;
  text-decoration: none;
  background: #5A5A5A url(tab.png) no-repeat 100% 0;} 

ul#menu li.selected a
{ height: 20px;
  padding: 6px 35px 5px 28px;}

ul#menu li.selected
{ margin: 1px 2px 0 0;
  background: #00C6F0 url(tab_selected.png) no-repeat 0 0;}

ul#menu li.selected a, ul#menu li.selected a:hover
{ background: #00C6F0 url(tab_selected.png) no-repeat 100% 0;
  color: #FFF;}

ul#menu li a:hover
{ color: #E4EC04;}

#site_content
{ width: 880px;
  overflow: hidden;
  margin: 20px auto 0 auto;
  padding: 0 0 10px 0;} 

#sidebar_container
{ float: right;
  width: 224px;}

.sidebar_top
{ width: 222px;
  height: 14px;
  background: transparent url(side_top.png) no-repeat;}

.sidebar_base
{ width: 222px;
  height: 14px;
  background: url(side_base.png) no-repeat;}

.sidebar
{ float: right;
  width: 222px;
  padding: 0;
  margin: 0 0 16px 0;}

.sidebar_item
{ background: url(side_back.png) repeat-y;
  padding: 0 15px;
  width: 192px;}

.sidebar li a.selected
{ color: #444;} 

.sidebar ul
{ margin: 0;} 

#content
{ text-align: left;
  width: 620px;
  padding: 0 0 0 10px;
  float: left;}
  
#content ul
{ margin: 2px 0 22px 0px;}

#content ul li, .sidebar ul li
{ list-style-type: none;
  background: url(bullet.png);
  margin: 0 0 0 0; 
  padding: 0 0 4px 25px;
  line-height: 1.5em;}

#footer
{ width: 100%;
  font-family: 'trebuchet ms', sans-serif;
  font-size: 100%;
  height: 80px;
  padding: 30px 0 5px 0;
  text-align: center; 
  background: #3B3939 url(footer.png) repeat-x;
  color: #A8AA94;}

#footer p
{ line-height: 1.7em;
  padding: 0 0 10px 0;}

#footer a
{ color: #A8AA94;
  text-decoration: none;}

#footer a:hover
{ color: #FFF;
  text-decoration: none;}

.search
{ color: #5D5D5D; 
  border: 1px solid #BBB; 
  width: 134px; 
  padding: 4px; 
  font: 100% arial, sans-serif;}

.form_settings
{ margin: 15px 0 0 0;}

.form_settings p
{ padding: 0 0 4px 0;}

.form_settings span
{ float: left; 
  width: 200px; 
  text-align: left;}
  
.form_settings input, .form_settings textarea
{ padding: 5px; 
  width: 299px; 
  font: 100% arial; 
  border: 1px solid #E5E5DB; 
  background: #FFF; 
  color: #47433F;}
  
.form_settings .submit
{ font: 100% arial; 
  border: 0; 
  width: 99px; 
  margin: 0 0 0 212px; 
  height: 33px;
  padding: 2px 0 3px 0;
  cursor: pointer; 
  background: #3B3B3B; 
  color: #FFF;}

.form_settings textarea, .form_settings select
{ font: 100% arial; 
  width: 299px;}

.form_settings select
{ width: 310px;}

.form_settings .checkbox
{ margin: 4px 0; 
  padding: 0; 
  width: 14px;
  border: 0;
  background: none;}
  </style>
</head>
<body>
		<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
        
          <h1><a href="index.php">Macedonian<span class="logo_colour">Music</span></a></h1>
          <h2>The best alternative bands in the Republic of Macedonia</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
         
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="new_albums.html">New albums</a></li>
          <li><a href="bands.html">Bands</a></li>
          <li><a href="contact.html">Contact Us</a></li>
		  <li>
		  <div class="content">
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		</div>
		</li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
           
            <h3 onmouseover="style.color='#AEB002'" onmouseout="style.color='#362C20'">New albums</h3>
            <h4>Fighting Windmills</h4>
            <h5>April 2018</h5>
            <p>After 2 years and a lot of hard work, the band has finally released their new brilliant album.<br /><a href="new_albums.html">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
			
              <li><a href="https://en.wikipedia.org/wiki/Category:Macedonian_rock_music_groups">Wikipedia (Macedonian Bands)</a></li>
  
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="GET" action="https://www.google.com" target="_blank" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Search Google:" />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
       
        <h1 onmouseover="style.color='#009FBC'" onmouseout="style.color='#362C20'" >Welcome to Macedonian Music!</h1>
        <p>Here you can find some of the best Alternative music bands in Macedonia.</p>
		
		<iframe style="border: 10px solid #323534;" width="560" height="315" src="https://www.youtube.com/embed/b9TpnK-WvFE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen> </iframe>
		
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="new_albums.html">New albums</a> | <a href="bands.html">Bands</a> | <a href="contact.html">Contact Us</a></p>
      <p>Created by "Bambokladd" using: <a href="https://www.w3schools.com/html/default.asp">HTML5</a> | <a href="https://www.w3schools.com/css/default.asp">CSS3</a> 
	  | <a href="https://www.w3schools.com/php/default.asp">PHP</a>
	</div>
	</div>
	</div>
</body>
</html>