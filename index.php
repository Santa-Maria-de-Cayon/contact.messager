<?php

 require __DIR__.'/parser.php';

 $uri  = 'http://www.kasparov.ru/rss/';
 $uri2 = 'https://rss.nytimes.com/services/xml/rss/nyt/World.xml';
 $uri3 = 'https://graniru.org/export/all-rss2.xml';

 echo '<a href="http://suzdalenko.com">http://suzdalenko.com</a><br><br>';

 print (new Parser())->go($uri);

 print (new Parser())->go($uri2);

 print (new Parser())->go($uri3);



?>
