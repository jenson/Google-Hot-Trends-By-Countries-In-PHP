<?php

include_once("googleTrends.php");
include_once("google_country_ext.php");
	
$objGoogleTrends = new GoogleHotTrends();
	
	
if(isset($_POST['submit']))
{
    $tarCountry=$_POST['tarCountry'];
	
}
else
{
 $tarCountry="co.in";
}

$hotTrendsArr = $objGoogleTrends->fetch_trends($tarCountry);


$google_country_shuffle = $google_country_domains;
shuffle($google_country_shuffle);
$google_country_split = array_chunk($google_country_shuffle, 35);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="Jenson M John">
    <!--<link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->

	 <title>Top Trends From <?php echo $google_country_domains[$tarCountry]; ?> : Google Trends By Countries</title>
    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
 
  <meta name="description" content="Google Trends By Countries. It's a collection of most searched terms for the current hour. <?php echo $google_country_domains[$tarCountry]; ?> Hot trends. <?php echo $google_country_domains[$tarCountry]; ?> top trending keywords. <?php echo $google_country_domains[$tarCountry]; ?> top search terms" />
  <meta name="keywords" content="Google <?php echo $google_country_domains[$tarCountry]; ?> trends,<?php echo $google_country_domains[$tarCountry]; ?> trends,<?php echo $google_country_domains[$tarCountry]; ?> top search keywords,<?php echo $google_country_domains[$tarCountry]; ?> hottest trends,<?php echo $google_country_domains[$tarCountry]; ?> top keywords,<?php echo $google_country_domains[$tarCountry]; ?> popular search terms, Google trends, Google worldwide trends" /> 

	
	
<style>
a{
text-decoration: underline;
}
</style>	
		
  </head>

  <body>
 
 <h2 style="padding-left:205px;"><a href="index.php">Home</a>&nbsp;<a href="http://socside.com/bible/" target="_blank">The Holy Bible</a>&nbsp;<a href="http://datumkit.com/words/" target="_blank">Social Trends</a></h2>
  
  

 <div class="container">
	
	  <h1>Google Top Trends By Countries</h1> 
      <div>Google Hot/Top Trends displays the top 20 hot, i.e., fastest rising, searches (search-terms) of the past hour from many countries around the Globe. This is for searches that have recently experienced a sudden surge in popularity. The countries include <?php echo implode(", ",$google_country_split[0]); ?> etc. Click on the below dropdown to Select Country.</div>
	  
	  
	  
	  <p>&nbsp;</p>
	  
	
	
                         <form name="dicts" id="dicts" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						 
						 <div id="langSelection">
                                 <select required name="tarCountry" id="tarCountry" style="width:271px;height:37px;font-size:17px">
                                     <option value="">Select Country</option>
									 <?php
									 foreach($google_country_domains as $google_country_domains_key=>$google_country_domains_val)
									 {
									 ?>
							<option value="<?php echo $google_country_domains_key; ?>" <?php if($tarCountry==$google_country_domains_key) echo 'selected="selected"'; ?>><?php echo $google_country_domains_val; ?></option>
									 <?php } ?>
								</select>
								 
                               
		<input type="submit" class="btn btn-primary" name="submit" id="submit" style="height:35px;font-size:19px;" value="Get Trends!"/></div>
                                            
                         </form>
                       
					   <?php
						 
                      if(isset($hotTrendsArr) && count($hotTrendsArr)>0)
                               { ?>
							     <h2>Top Trends From <?php echo $google_country_domains[$tarCountry]; ?></h2>
							   <?php
							       shuffle($hotTrendsArr);
								   foreach($hotTrendsArr as $hotTrendsArrVal)
								   {
							   ?>
   							       <a href="http://datumkit.com/words/?q=<?php echo $hotTrendsArrVal; ?>" target="_blank"><strong><?php echo $hotTrendsArrVal; ?></strong></a>&nbsp;                             
								<?php 
								  } 
								}	
							?>
								

									<p></p>			
						
						
                                        
    </div> <!-- /container -->
	


  <div id="footer">
      <div class="container">
        <p class="text-muted">Socside.com - Google Trends By Countries</p>
      </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	

  </body>
</html>

