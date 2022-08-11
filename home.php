<?php
session_start();
if(isset($_SESSION['uid']) && isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>WAT Week10</title>
	<style>
		
		body {
	font: 1em Arial, Helvetica, sans-serif;
}
a {
	color: #669;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
h1 {
	font: bold 36px Arial, Helvetica, sans-serif;
}
#navlist li {
	display: inline;
	list-style-type: none;
}
.error{
	color:red;
}
.smallFont{
	font-size: 0.7em;
}

/************************************************************************************
 STRUCTURE
 *************************************************************************************/
#pagewrap {
	padding: 5px;
	width: 960px;
	margin: 20px auto;
}
header {
	height: 180px;
}
#content {
	width: 600px;
	float: left;
}
#sidebar {
	width: 300px;
	float: right;
}
footer {
	clear: both;
}

/************************************************************************************
 MEDIA QUERIES
 *************************************************************************************/
/* for 980px or less */
@media screen and (max-width: 980px) {

	#pagewrap {
		width: 94%;
	}
	#content {
		width: 65%;
	}
	#sidebar {
		width: 30%;
	}
	#navlist li {
		display: inline;
	}

}

/* for 750px or less */
@media screen and (max-width: 750px) {

	#content {
		width: auto;
		float: none;
	}
	#sidebar {
		width: auto;
		float: none;
	}
	 #navlist li {
        display: block;
        margin:10px;
    }
    
    #navlist a {
        padding: 3px 10px;
        border: solid 1px #ccc;     
    }
    #navlist a:link, #navlist a:visited{
        display: block;
        margin-left:auto;
        margin-right:auto;
        width:200px;
        text-align:center;
    }

}

/* for 550px or less */
@media screen and (max-width: 550px) {

	header {
		height: auto;
	}
	h1 {
		font-size: 24px;
	}
	#sidebar{
        display: none;
    }
	footer {
		display: none;
	}
	
}

/* border & guideline*/
#content {
	background: #f8f8f8;
}
#sidebar {
	background: #f0efef;
}
header, #content, #sidebar, nav {
	margin-bottom: 5px;
}
#pagewrap, header, #content, #sidebar, footer, nav {
	border: solid 1px #ccc;
	padding: 5px;
}

/*navigation*/
ul#navlist {
	margin-left: 0;
	padding-left: 0;
	white-space: nowrap;
}


 #navlist a {
 padding: 3px 10px;
 }

#navlist a:link, #navlist a:visited {
	color: #000;
	background-color: #ffffff;
	text-decoration: none;
}

#navlist a:hover {
	color: #fff;
	background-color: #000;
	text-decoration: none;
}

	</style>
</head>
<body>
    <div id="pagewrap">
        <header>
        	<h1>Hello, <?php echo $_SESSION['username'];  ?></h1>
              <h3>Portfolio Project of</h3> 
    	    <h2>Web Applications and Technologies</h2>
        </header>
    	<nav>
        	<ul id="navlist">
        		<li>
        			<a href="basic/basics.php">Basics</a>
        		</li>
        		<li>
        			<a href="fundamental/watWk4.php">Fundamentals</a>
        		</li>
        		<li>
        			<a href="form/form.html">Forms</a>
        		</li>
        		<li>
        			<a href="file/mysql.php">MySQL</a>
        		</li>
        		<li>
        			<a href="crud/index.php">CRUD</a>
        		</li>
        		<li>
        			<a href="session/session.php">Sessions</a>
        		</li>
        		<li>
        			<a href="signup.php">Register</a>
        		</li>
        		<li>
        			<a href="sortSearch.php">Search</a>
        		</li>
        		<li>
        			<a href="logout.php">Logout</a> 
        		</li>
        	</ul>
        </nav>
        <section id="content">
        	<h2>About</h2>
        	<p>For this module you are required to build a portfolio of the work you 
        	produce.  This will be submitted for assessment.  You can use this simple 
        	template unmodified. You can modify this template.  You can use your own 
        	template.  The choice is yours. </p>        
        </section>
        <section id="sidebar">
        	<h3>Photo</h3>        	
        </section>
        <footer>
			<h4>Name: Muna KC <br>ID: c7227191</h4>
		</footer>
	</div>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>