<html>
<head>
<style type="text/css">
	div{
		text-align: right;
	}
	 
	    h2{
	    	color: white;
	    	font-family: Blackadder ITC;
	    	
	    }
		h1{ 
		    color:powderblue;
            font-family:Brush Script MT;
            font-style: italic;
            font-size: 300%;
            border: 1px solid lightblue;

		  }
		body
		  {
            color: blue;
		  }
        div.a
        {text-align: center;}
        div.b
        {margin: 50px;}

        .button {
  border-radius: 4px;
  background-color:#66CCCC;
  border: none;
  color: #FFFFFF;
  text-align: top;
  font-size: 14px;
  padding: 20px;
 
  transition: all 0.5s;
  cursor: pointer;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 12px;
  right : -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
          p.a{
          	color:#66CCCC; 
          	font-style:italic;
          }      
          p.b{
          	color:black; 
          	font-style:italic;
          } 
          p.c{
          	border: 10px ;
          	padding: 5px;
          }
body {margin:0;}

.icon-bar {
    width: 100%;
    background-color: #5F9EA4;
    overflow: auto;
    align-content: right;
}

.icon-bar a {
    float: right;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 16px;
}

.icon-bar a:hover {
    background-color: #000;
}

.active {
    background-color: #4CAF50;
}  
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
	</style>	
</head>
<body bgcolor="#344152">
<?php
$comm=$_POST["comm"];
$uname=$_POST["uname"];
if(empty($comm)||empty($uname))
{
  echo "Enter all fields";
}

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="project_db";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
$INSERT="INSERT INTO mesgl VALUES(?,?)";
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$comm,$uname);
$stmt->execute();
echo "<div><h1>Successfully commented</h1></div>";

echo"<div><button class=\"button\" onclick=\"check_login.php\">Go back to login</button></div>";
?>
</body>
</html>