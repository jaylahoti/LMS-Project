<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - NYC Library</title>
	<link rel="styleshee" type="text/css" href="style.css" />
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="ie6.css" />
	<![endif]-->
    <style type="text/css">
<!--
.style1 {font-size: 24px}
-->
    </style>
</head>
<body style="background-color:lightblue">
	<div id="page">
		<div id="header">
			<div id="section">
				<div>
				  <p><a href="index.html"><img src="images/online lib.jpg" alt="Logo" width="381" height="55" /></a></p>
				  <p>&nbsp;</p>
				  <p><span style="text-align:right"> jlahoti@nyit.edu</br>+1551-998-7500</span>
			      </p>
			      </p>
				</div>
			</div>
			<div id="tagline">
				<div>
					<h2 style="text-align:center">Welcome to Library.</h2>
			  </div>
			</div>
		</div>
        <body>
<form name = "readerform" method="get" action="readerfunctons.php">

	
 			   <p align="center">&nbsp;</p>
 			   <p align="center"><span class="style3 style1">Log In</span>  &nbsp;</p>
 			   <p align="center"><br />
        Enter Card Number<br />
 			     
 			     
 			     
                 <input type="text" name="reader_id"  />
        </p>
 			   <p align="center"><br/>
                   <input type="submit" name="submitreader"/>
  &nbsp;&nbsp; 
 			     
                 <a href="registration.php">Not Yet Member?</a>                              </p>
 			   <p align="center">&nbsp;</p>
</form>
<form name="adminform" method="post" action="adminlogin.php">
						<div align="center">
						  <p class="style3">Admin Log In</p>
						</div>

                    <table align="center">
                        <tr>
                          <td width="64">
                            ID        </td>
                      <td width="172">
                        <input type="text" name="adminid"  />      </td>
                      </tr>
                        <tr>
                          <td>
                            Password        </td>
                      <td>
                        <input type="password" name="pass"  />      </td>
                      </tr>
                        <tr>
                          <td>
                                  </td>
                      <td>
                        <input type="submit" name="submitadmin"  />      </td>
                      </tr>
                      
                      </table>
                     </form>
		<div id="footer">
			<div>
				<p>&nbsp;</p>
				<div id="connect"></div>
<div class="section">
  <p>&copy; Copyright Online library - All Rights Reserved.</p>
			  </div>
		  </div>
	  </div>
	</div>
</body>
</html>