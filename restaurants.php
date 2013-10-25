<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>RonRite</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="RonRite: Decision,Search Engine,Smart Choice,Job Hunting,Immigration,Web Portal,Entertainment" />
<meta name="description" content="RonRite: Ron Make Decision Rite!" />
<meta charset="utf-8">

    <link rel=stylesheet type="text/css" href="http://www.cis.syr.edu/~wedu/style/research.css">
   <STYLE TYPE="text/css">
      DIV.withbg {padding: 1em 0; border: solid thin; margin: 1em 0; background: #ddd}
   </STYLE>     
   
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- RonRite_Banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-5667581517062677"
     data-ad-slot="8512916565"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45109386-1', 'azurewebsites.net');
  ga('send', 'pageview');

</script>

</head>
<body text="#000000" bgcolor="#ffffff" link="#0000EE" vlink="#551A8B" alink="#FF0000">


<?
// $HTTP_USER_AGENT and $REMOTE_ADDR are two of many evironment
// variables in PHP.  Environent variables store information about
// the user's and server's environment
 print("<br><br>");
 
 print("You are using $_SERVER[HTTP_USER_AGENT]<br>");
 print("Your Internet address is $_SERVER[REMOTE_ADDR]<br>");

 $ip = $_SERVER['REMOTE_ADDR'];
 $details = file_get_contents("http://ipinfo.io/{$ip}");
 //print_r($details);
 $obj = json_decode($details);
 $city=$obj->{'city'};
 $state=$obj->{'region'};
 print("You are at $city in $state <br>");
 
 print("<br>");

  // Enter the path that the oauth library is in relation to the php file
  require_once ('OAuth.php');

  // For example, request business with id 'the-waterboy-sacramento'
  //$unsigned_url = "http://api.yelp.com/v2/search?term=Chinese+Food&location=Fremont+California";
  $unsigned_url = "http://api.yelp.com/v2/search?term=Chinese+Food&location=".$city."+".$state;

 // // Set your keys here
  $consumer_key = "M44itCk1vYxpqJJL_CmjMg";
  $consumer_secret = "DRG9GUQiJvlfufXd3p8DlA8zHOA";
  $token = "_k7AmKTWmBglmPNnLs8xJGNtJBRq4elB";
  $token_secret = "dwTWziQ2XMMzsJVcAtlpj27CQKI";

  // Token object built using the OAuth library
  $token = new OAuthToken($token, $token_secret);

  // Consumer object built using the OAuth library
  $consumer = new OAuthConsumer($consumer_key, $consumer_secret);

  // Yelp uses HMAC SHA1 encoding
  $signature_method = new OAuthSignatureMethod_HMAC_SHA1();

  // Build OAuth Request using the OAuth PHP library. Uses the consumer and token object created above.
  $oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

  // Sign the request
  $oauthrequest->sign_request($signature_method, $consumer, $token);

  // Get the signed URL
  $signed_url = $oauthrequest->to_url();

  // Send Yelp API Call
  $ch = curl_init($signed_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch); // Yelp response
  curl_close($ch);

  // Handle Yelp response data
  $response = json_decode($data);

  echo "The chinese restaurant close to you are: </br></br>";
  foreach($response->businesses as $business):
          //echo "<img border=0 src=".$business->photo_url.'""><br/>";
		  echo "<a href=\"". $business->mobile_url . \">";
		  echo $business->name ."</a><br/>";
		  echo $business->mobile_url ."<br/>";
		  echo $business->phone ."<br/>";
          //echo $business->city ."<br/>";
          //echo $business->state ."<br/>";
          //echo $business->zip ."<br/>";

          echo "<hr>";
      endforeach;
 ?>


<table CELLSPACING=5 CELLPADDING=0 border=0>

<tr>
<td align=left>
<img SRC="Logo.png" width=200 height="50" align=LEFT border=0>
</td>
<td rowspan="1"> 
<h1><font color="#008080">RonRite: Decision RIghT, not wRONg</font></h1>
</td>
</tr>

<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2>Link to restaurant review website</h2>

  <UL>
  <LI><a href="http://www.yelp.com">Yelp</a>
  <p>

  <LI><a href="http://www.urbanspoon.com">Urban Spoon</a>
  <p>

  <LI><a href="http://www.zagat.com">Zagat</a>
  </UL>

</UL>
</td>
</tr>
<p>

</table>

    <div id="footer">        RonRite Inc © 2013 All right reserved.     </div>

</body>
</html>
