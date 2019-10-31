<?php

print '<a href="http://suzdalenko.com">Suzdalenko</a><br><br>';

$xml = simplexml_load_file('http://www.kasparov.ru/rss/policy.xml');

for($i=0;$i<=49;$i++){


   $data = $xml->channel[0]->item[$i]->pubDate;
   $img =  $xml->channel[0]->item[$i]->enclosure['url'];
   $title = $xml->channel[0]->item[$i]->title;
   $title = preg_replace( '/"([^"]*)"/', "«$1»", $title );
   $ssilka =  $xml->channel[0]->item[$i]->link;
   $description = $xml->channel[0]->item[$i]->description;

     echo   $data .        '<br>'.
            $title  .      '<br>'.
            $description . '<br>'.

             '<a href="'.$ssilka.'">'.$ssilka.'</a>   <br>            
              <img class="mi_img" src="'.$img .'"><br><br>';

   };


   
?>