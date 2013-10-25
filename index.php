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

<table CELLSPACING=5 CELLPADDING=0 border=0>

<tr>
<td align=left>
<img SRC="Logo.png" align=LEFT border=0>
</td>
<td rowspan="1"> 
<h1><font color="#008080">RonRite: Decision RIghT, not wRONg</font></h1>
</td>
</tr>


<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="deals.html">Deal Of The Day</a></h2>

  <UL>

  <LI><strong>Barnes & Noble NOOK HD+ 16GB Wi-Fi 9" Slate Tablet BNTV600 Android w/Google Play for $100 </strong>
  <div class="posttext"><a href="http://www.ebay.com/itm/Barnes-Noble-NOOK-HD-16GB-Wi-Fi-9-Slate-Tablet-BNTV600-Android-w-Google-Play-/390639851939?pt=US_Tablets&hash=item5af3f319a3" target="_blank">Besttopdeals via eBay</a>16GB Barnes & Noble 9" Nook HD+ 1080p Android Tablet (Refurbished) $100 + Free shipping  

  <p>
  
  <LI><strong>RRI Women's Jackets & Vests sale</strong>

  <div class="posttext"><a href="http://www.rei.com/outlet/feature/Deal+Of+The+Week;jsessionid=VhQETnYdTNNfRL-+mVi0mEnh?siteId=cjIsd2x-it3792&URL=http%3A%2F%2Fwww.rei.com%2Foutlet%2Ffeature%2FDeal%2BOf%2BThe%2BWeek&PID=1225267&AID=10456937&cm_mmc=aff_cj-_-1225267-_-10456937&version=V4">REI Women's Jackets & Vests</a>: Mountain Hardwear Windrush Jacket $12.75, Marmot Brentford Jacket $16.75, adidas Hiking 1-Side Fleece Jacket $9.75 & Much More + Free Store Pickup
  <p>

  <LI><strong>Canon EOS 6D 20.2MP Full Frame DSLR Camera (Body Only) + 4% Reward + 16GB SanDisk Ultra Card + Canon Gadget Bag + Oben Monopod & More $1573 + Free Shipping </strong>
  <div class="posttext"><a href="http://www.bhphotovideo.com/c/product/892349-REG/Canon_8035b002_EOS_6D_Digital_Camera.html" target="_blank">B&H Photo Video </a> has Canon EOS 6D 20.2MP Full Frame DSLR Camera (Body Only) + 4% Reward for $1573. Must proceed to checkout for final price. Shipping is free 

  <p>
  <LI><a href="surprise.html">Surprise me!</a>
  <p>
  </UL>
  
</UL>
</td>
</tr>

<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="restaurants.html">Restaurants Of The Day </a> </h2>

<?
// $HTTP_USER_AGENT and $REMOTE_ADDR are two of many evironment
// variables in PHP.  Environent variables store information about
// the user's and server's environment
 print("<br><br>");
 
 $ip = $_SERVER['REMOTE_ADDR'];
 $details = file_get_contents("http://ipinfo.io/{$ip}");
 $obj = json_decode($details);
 $city=$obj->{'city'};
 $state=$obj->{'region'};

  // Enter the path that the oauth library is in relation to the php file
  require_once ('OAuth.php');

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

  $i=1;
  foreach($response->businesses as $business)
  {
          if ($i > 5)
		  {
		    break;
		  }
          $i++;

          //echo "<img border=0 src=".$business->photo_url.'""><br/>";
		  echo "<UL><LI><strong>" . $business->name ."</strong><br/>";
		  echo "<a href=\"". $business->mobile_url . "\">";
		  echo $business->name ."</a><br/>";
		  echo $business->phone ."<br/>";
          //echo $business->city ."<br/>";
          //echo $business->state ."<br/>";
          //echo $business->zip ."<br/>";

          echo "<hr>";
      //endforeach;
   }
 ?>

  <UL>
  <LI><strong>Chili Palace - Milpitas - CA - 95035</strong>
  <br>
  <a href="http://chilipalacemilpitas.com/">Chili Palace</a>
  <p>

  <LI><strong>Chef Yu/Hunan Gourmet - Sunnyvale - CA - 94086 </a> </strong>
  <br>
  <a href="http://www.yelp.com/biz/chef-yu-hunan-gourmet-sunnyvale">Chef Yu</a>
  <p>

  <LI><strong>Mama Mia Restaurant</strong>
  <br>
  <a href="http://www.mamamias.com/">Mama Mia Itanlian Restaurant</a>
  <p>
  
  <LI><a href="restaurants.php">Surprise me!</a>
  <p>  
  </UL>

</UL>
</td>
</tr>

<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="stock.html">Stock Of The Day </a> </h2>

  <UL>
  <LI><a href="http://finance.yahoo.com/q?s=amzn">AMZN</a>
  <LI><a href="http://finance.yahoo.com/q?s=msft">MSFT</a>
  <LI><a href="http://finance.yahoo.com/q?s=amd">AMD</a>
  <LI><a href="http://finance.yahoo.com/q?s=lnkd">LNKD</a>
  </UL>

</UL>
</td>
</tr>


<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="news.html">News of the day </a> </h2>

  <UL>
  <LI><strong>On Obamacare </strong>
  <br>
  <a href="http://www.chicagotribune.com/news/chi-obama-healthcare-website-20131023,0,1380960.story">Key House Republican presses Google, Microsoft, others for healthcare website fixes</a>
  <p>
  
  <LI><strong>On Apple products</strong>
      <br>
      <a href="http://betanews.com/2013/10/22/apple-announces-the-thinner-lighter-ipad-air-and-new-ipad-mini/">Apple announces the thinner, lighter iPad Air and new iPad mini</a>

  <p>

  <LI><strong>On Stock market</strong>
      <br>
      <a href="http://finance.yahoo.com/news/futures-slide-china-cash-fears-113927665.html">Wall Street set to fall on concern over China, Europe banks</a>
  <p>

  <LI><strong>On Entertainment</strong>
      <br>
      <a href="http://insidemovies.ew.com/2013/10/22/george-clooney-monuments-men-2014/">George Clooney pushes 'The Monuments Men' to 2014</a>
  <p>
  </UL>

</UL>
</td>
</tr>



<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="fun.html">Fun Of The Day</a></h2>

  <UL>
  <LI><a href="http://www.youtube.com/">Enjoy a Youtube video</a>
  <LI><a href="http://www.fandango.com/">Go watch a movie</a>
  <LI><a href="http://www.parks.ca.gov/">Go walk in a trail</a>
  <LI><a href="http://www.themeparkcity.com/USA_index.htm">Go visit a theme park</a>
  <LI><a href="http://www.si.edu/">Go visit a Smithonian Museums</a>
  </UL>

</UL>
</td>
</tr>


<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="popular.html">Other things you might want to check out</a> </h2>

  <UL>
  <LI><a href="http://www.google.com">Google</a>
  <LI><a href="http://www.facebook.com">Facebook</a>
  <LI><a href="http://www.linkedin.com">LinkedIn</a>
  <LI><a href="http://www.pinterest.com">PInterest</a>
  <LI><a href="http://www.twitter.com">Twitter</a>
  <LI><a href="http://www.microsoft.com">Microsoft</a>
  
  <p>
  <LI><a href="portal.html">Surprise me!</a>
  <p>
  </UL>
  <br>
  <br>

  </UL>
  
</UL>
</td>
</tr>

<p>

</table>

<p>

<table CELLSPACING=5 CELLPADDING=0 border=0>


<tr>
<p>
    <br>
<!-- hitwebcounter Code START -->
<font size="5">You are visitor </font><a href="http://www.hitwebcounter.com/" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=5111962&style=0036&nbdigits=6&type=page&initCount=0" title="www.hitwebcounter com get the code" Alt="www.hitwebcounter com get the code"   border="0" >
</a>
<br/>
</tr>

<br>


<center>    <div id="footer">        RonRite Inc © 2013 All right reserved.     </div> </center>


</body>
</html>
