<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>RonRite</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="RonRite: Decision,Search Engine,Smart Choice,Job Hunting,Immigration,Web Portal,Entertainment" />
<meta name="description" content="RonRite: Ron Make Decision Rite!" />
<meta charset="utf-8">

   <link rel=stylesheet type="text/css" href="ronrite.css">
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

<table cellspacing="0" cellpadding="0">
<tr>
<td align=left>
<img SRC="images/RonRite_logo.png" align=LEFT border=0>
</td>
<td align=left> 
<h1><font color="#008080">RonRite: Decision RITE</font></h1>
</td>
</tr>
</table>


<tr>
<td COLSPAN="2">
<hr>
<UL>
<LI><h2><a href="deals.html">Deal Of The Day</a></h2>

  <UL>

  <LI><strong>16GB Asus Nexus 7 2nd Gen 7" Android 4.3 Tablet $199 + Free Shipping  </strong>
  <div class="posttext"><a href="http://www.ebay.com/itm/NEW-Google-Nexus-7-inch-FHD-1920X1200-Tablet-16GB-Android-4-3-Jelly-Bean-/360777877185?pt=US_Tablets&hash=item54000986c1" target="_blank">Buy via eBay</a> has 16GB Asus Nexus 7 2nd Gen 7" Android 4.3 Tablet for $199. Shipping is free

  <p>
  
  <LI><strong>Canon PIXMA MG6320 Wireless Color Photo Printer with Scanner & Copier (Refurbished w/ 1-Year Warranty) $60 + Free Shipping </strong>
  <div class="posttext"><a href="http://shop.usa.canon.com/shop/en/catalog/printers-all-in-ones/refurbished-printers/pixma-mg6320-white-refurbished-photo-all-in-one-printer">Canon PIXMA MG6320 </a> Wireless Color Photo Printer with Scanner & Copier (Refurbished w/ 1-Year Warranty) $60 + Free Shipping 
  <p>

  <LI><strong>H&M 50% off Winter Favorites</strong>
  <div class="posttext"><a href="http://www.hm.com/us/today-w44-us">H&M </a>offers 50% off Winter Favorites thru 10/31. Free shipping on $50+.
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
<LI><h2><a href="restaurants.php">Restaurants Of The Day </a> </h2>
  <UL>
<?
// $HTTP_USER_AGENT and $REMOTE_ADDR are two of many evironment
// variables in PHP.  Environent variables store information about
// the user's and server's environment
 
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
		  echo "<LI><strong>" . $business->name ."</strong><br/>";
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

  <LI><a href="restaurants.php">Surprise me!</a>
  <br>  
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
  <LI><a href="http://finance.yahoo.com/q?s=aapl">AAPL</a></LI>
  <LI><a href="http://finance.yahoo.com/q?s=alu">ALU</a></LI>
  <LI><a href="http://finance.yahoo.com/q?s=pbr">PBR</a></LI>
  <LI><a href="http://finance.yahoo.com/q?s=fb">FB</a></LI>    
  <LI><a href="http://finance.yahoo.com/q?s=lnkd">LNKD</a></LI>
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
  <LI><strong>On protecting ABC </strong>
  <br>
  <a href="http://europe.chinadaily.com.cn/world/2013-11/02/content_17075869.htm">
  Hundreds in US protest against ABC's offensive skit
  </a><br>
  <a href="http://thescoopblog.dallasnews.com/2013/11/protestors-gather-outside-wfaa-channel-8-demand-firing-of-jimmy-kimmel-over-racist-bit.html/?nclick_check=1">
  Protesters gather outside WFAA-Channel 8, demand firing of Jimmy Kimmel over ‘racist’ bit
  </a><br>
  <a href="http://entertainment.time.com/2013/10/28/kids-say-the-most-divisive-things-asian-americans-protest-jimmy-kimmel/">
  Kids Say the Most Divisive Things: Asian Americans Protest Jimmy Kimmel
  </a>
  <p>
  
  <LI><strong>On World News </strong>
  <br>
  <a href="http://www.businessinsider.com/japan-and-russia-are-expanding-defense-ties-with-eyes-on-china-2013-11">
  Japan And Russia Are Expanding Defense Ties With Eyes On China
  </a><br>
  <a href="http://www.thepeoplesvoice.org/TPV3/Voices.php/2013/11/02/israel-attacks-syria-and-gaza">
  Israel Attacks Syria and Gaza  
  </a>
  <p> 
    
  <LI><strong>On tech news</strong>
  <br>
  <a href="http://venturebeat.com/2013/11/01/judgement-day-for-android-apple-microsoft-file-lawsuit-against-google-samsung/">
  Judgment day for Android: Apple, Microsoft file lawsuit against Google, Samsung
  </a>
  <br>
  <a href="http://www.usatoday.com/story/tech/2013/11/01/apple-ipad-air-launch/3343253/">
  Apple launches the iPad Air
  </a>
  <br>
  <a href="http://www.informationweek.com/mobility/smart-phones/google-nexus-5-pros-and-cons/240163443">
  Google Nexus 5: Pros And Cons
  </a>
  <p>

  <LI><strong>On Stock market</strong>
  <br>
  <a href="http://www.reuters.com/article/2013/11/01/us-usa-stocks-weekahead-idUSBRE9A012W20131101">
	Wall St. Week Ahead: Twitter's IPO to provide week's excitement
	</a><br>
  <a href="http://www.reuters.com/article/2013/11/01/us-jpmorgan-disclosure-idUSBRE9A00FC20131101">
	JPMorgan discloses wider probes of hiring, currency trading
	</a><p>
  
  </UL>

</UL>
</td>
</tr>


<tr>
<td COLSPAN="2">
<hr>
<LI><h2><a href="fun.html">Fun Of The Day</a></h2>

  <UL>
  <LI><a href="http://www.sfgate.com/food/article/It-s-crabbing-time-in-the-Bay-Area-2298246.php">Crab season 2013 starts today!</a></LI>
  <LI><a href="http://museums.bankofamerica.com/mobile">Bank of America Museum on US weekend this weekend</a></LI>  
  <LI><a href="http://www.youtube.com/">Enjoy a Youtube video</a></LI>
  <LI><a href="http://www.fandango.com/">Go watch a movie</a></LI>
  <LI><a href="http://www.parks.ca.gov/">Go walk in a trail</a></LI>
  <LI><a href="http://www.themeparkcity.com/USA_index.htm">Go visit a theme park</a></LI>
  <LI><a href="http://www.si.edu/">Go visit a Smithonian Museums</a></LI>
  </UL>

  </td>
</tr>


<tr>
<td COLSPAN="2">
<hr>
<LI><h2><a href="portal.html">Online Portals</a> </h2>

  <UL>
  <LI><a href="http://www.google.com">Google</a></LI>
  <LI><a href="http://www.bing.com">Bing</a></LI>
  <li><a href="http://www.facebook.com/" target="_blank"> FaceBook</a></li>
  <li><a href="http://twitter.com/" target="_blank">Twitter</a></li>
  <li><a href="http://www.yelp.com" target="_blank">Yelp</a> </li>
  <LI><a href="http://www.linkedin.com">LinkedIn</a></LI>
  <LI><a href="http://www.inrefer.com">InRefer</a></LI>  
  </UL>
  <br>

  </UL>
</td>
</tr>

<p>

</table>

<p>

<table CELLSPACING=5 CELLPADDING=0 border=0>


<tr>
<p>
   

<center>	
<!-- hitwebcounter Code START -->
<font size="5">You are visitor </font><a href="http://www.hitwebcounter.com/" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=5111962&style=0036&nbdigits=6&type=page&initCount=0" title="www.hitwebcounter com get the code" Alt="www.hitwebcounter com get the code"   border="0" >
</a>
<br/>
</tr>
</center>
<br>

<center>
   <div id="footer">        RonRite Inc &copy; 2013 All right reserved.     </div> 
</center>


</body>
</html>
