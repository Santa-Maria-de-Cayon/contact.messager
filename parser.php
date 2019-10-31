<?php  

class Parser{



    public function go($url){
    
           $result = '';

           $xml = simplexml_load_file($url);

           for($i=0;$i<=33;$i++){
                $data = $xml->channel[0]->item[$i]->pubDate;
                $img =  $xml->channel[0]->item[$i]->enclosure['url'];
                $title = $xml->channel[0]->item[$i]->title;
                $title = preg_replace( '/"([^"]*)"/', "«$1»", $title );
                $ssilka =  $xml->channel[0]->item[$i]->link;
                $description = $xml->channel[0]->item[$i]->description;
                 

                $result .=   $data .        '<br>'.
                               $title  .      '<br>'.
                               $description . '<br>'.
                               '<a href="'.$ssilka.'">'.$ssilka.'</a>   <br>            
                               <img class="mi_img" src="'.$img .'"><br><br>';       
                };
                return $result;
    }

}