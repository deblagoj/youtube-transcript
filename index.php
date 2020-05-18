<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;

}

.form-inline label {
  margin: 5px 5px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  width: 50%;

  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>

<style>
    .box{
        border: 1px solid #aaa; /*getting border*/
        color: #000; /*text color*/
        box-sizing: border-box;
          width: 100%;
          height: 70%;

          float: left;
          padding: 50px;


        	border: 3px solid #cccccc;
        	padding: 5px;
        	font-family: Tahoma, sans-serif;
        	background-image: url(bg.gif);
        	background-position: bottom right;
        	background-repeat: no-repeat;
    }


    ul.share-buttons{
      list-style: none;
      padding: 0;
    }

    ul.share-buttons li{
      display: inline;
    }

    ul.share-buttons .sr-only{
      position: absolute;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px, 1px, 1px, 1px);
      padding: 0;
      border: 0;
      height: 1px;
      width: 1px;
      overflow: hidden;
    }


</style>




</head>
<body>


<form class="form-inline" action="" method="post">
Youtube link: <input type="text" name="link"><br>

</label>
<button type="submit">Submit</button>
</form>


<?php

if(isset($_POST["link"])) {

#echo $_POST["link"];
$txt = 'python3 transcript1.py ';
$txt .=$_POST["link"];
$command = escapeshellcmd($txt);
$output = shell_exec($command);

echo '<textarea class="box">'.$output.'</textarea>';


}
?>
<br>




</body>
<footer>
  <br>
  <ul class="share-buttons">
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.youtube-transcript.com&quote=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="images/flat_web_icon_set/color/Facebook.png" /></a></li>
    <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.youtube-transcript.com&text=:%20http%3A%2F%2Fwww.youtube-transcript.com" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="images/flat_web_icon_set/color/Twitter.png" /></a></li>
    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.youtube-transcript.com&title=&summary=&source=http%3A%2F%2Fwww.youtube-transcript.com" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Share on LinkedIn" src="images/flat_web_icon_set/color/LinkedIn.png" /></a></li>
    <li><a href="mailto:?subject=&body=:%20http%3A%2F%2Fwww.youtube-transcript.com" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="images/flat_web_icon_set/color/Email.png" /></a></li>
  </ul>
  
  <p>Contact information: <a href="mailto:info@bitt.solutions">
  info@bitt.solutions</a>.</p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_s-xclick" />
  <input type="hidden" name="hosted_button_id" value="BZCPN6LPAXXFN" />
  <input type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
  <img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
  </form>



</footer>
</html>
