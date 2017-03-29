<?php
	require_once("Includes.php");

	global $idioma;
    global $page;

    /* mudou idioma na url */
    if (!empty($_GET["lang"])){
        setcookie("lang", $_GET["lang"]);
        $idioma = $_GET["lang"];
    }

    else{

        /* busca idioma no cookie */
        if (isset($_COOKIE['lang'])){
            $idioma = $_COOKIE['lang']; 
        }
        else{
            setcookie("lang", urlencode('pt'));
            $idioma = isset($_COOKIE['lang']); 
        }
    } 

    /* texto de acordo com o idioma */
    switch ($idioma) {
    	case "en":
    		
            $json = file_get_contents('langs/en.json');
    		break;
    	
    	case "es":

            $json = file_get_contents('langs/es.json');
    		break;

    	case "pt":
    	default:    	
         
            $json = file_get_contents('langs/pt.json');
    		break;
    }

    $text = json_decode($json, true);

   
    $page = basename(basename($_SERVER['SCRIPT_NAME']),'.php');
?>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>		
<script type="text/javascript" src="js/main.js"></script>	
<script type="text/javascript" src="js/jquery.ellipsis.js"></script>

<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">	

