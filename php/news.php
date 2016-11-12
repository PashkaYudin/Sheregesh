<?php
$url = "http://www.sheregesh.su/rss_yandex";
$xml = simplexml_load_file($url);

// $maintitle = $xml->channel->title;
$yandex = $xml->getNamespaces(true);

for($i = 0; $i < 5; $i++){

   $title = (string)$xml->channel->item[$i]->title;
   $pubDate = (string)$xml->channel->item[$i]->pubDate;
   $pubDate = strftime("%d/%m/%Y", strtotime($pubDate));
   $full_text = (string)$xml->channel->item[$i]->description;
    // foreach ($xml->channel->item[$i] as $item){
    //     $namespaces = $item[$i]->getNameSpaces(true);
    //     $yandex = $item[$i]->children($namespaces['yandex']);
    //     $full_text = (string)$yandex->{'full-text'};
    // }

   echo '<div><h4>'.$title.'</h4><a href="#">'.$pubDate.'</a>
         <p>'.$full_text.'</p> 
         </div>';
}


// include_once ('simple_html_dom.php');
// $html = new simple_html_dom();

// for ($i = 1; $i <= 5; $i++) { 

//     $address = "http://gesh.info/news";
//     $html->load_file($address);

//     $final = "";

//     foreach($html->find('.td-center-news a strong, .weather-date') as $element) 
//     // echo $element->href."</br>";
//     $final += '<div><h4>'.$element.'</h4>';

//     foreach($html->find('.weather-date') as $date) 
//     $final += '<a href="'.$date->href.'">'.$date.'</a>';

//     $final += '<p></p></div>';

// //     echo $final;
// }

?>