<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.eea.europa.eu/publications/latest/RSS2");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 foreach( $content as $data )
 { 
   /*echo '<pre>';
   print_r($data->getElementsByTagName("description")->item(0));exit;
   echo  '</pre>';*/
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $text= $data->getElementsByTagName("description")->item(0)->nodeValue;
   
?>
   <h2><a href="<?=$link?>"><?=$title?></a></h2>
   <p><?=$text?></p>
<?php 
 }
?>