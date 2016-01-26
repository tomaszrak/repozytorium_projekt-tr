<?php
    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true) && $_SESSION['status'] == "student")
    {
        header('Location: student.php');
        exit();
    }
    else if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true) && $_SESSION['status'] == "prowadzacy")
    {
        header('Location: prowadzacy.php');
        exit();
    }
?>


<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title> Projekt </title>
    
    
</head>

<body>

<div id="glowny_div"> 
	<div id="naglowek">
		<h1>Zapisy na projekty</h1>
	</div>
<?php
    echo "<div class='head'>";
    	echo "<div class='head_nazwa'>Witaj admin!</div>";
    	echo "<a href='logout.php'><div class='wyloguj'>Wyloguj się!</div></a>";
		echo "<div style='clear: both;'></div>";
    	
    echo "</div>";
?>