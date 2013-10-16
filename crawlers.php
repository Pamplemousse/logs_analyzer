<?php
    include('logs.php');
    $logs = new Logs();
    // getDimensionCrawlers($logs);
    // function getDimensionCrawlers($logs) {
    //     echo 'Nombre de logs googlebot : '.$logs->getCountCrawler("Googlebot");
    //     echo '<br/>';
    //     echo 'Nombre de logs googlebot-mobile : '.$logs->getCountCrawler("Googlebot-Image");
    //     echo '<br/>';
    //     echo 'Nombre de logs bingbot : '.$logs->getCountCrawler("Bingbot");
    //     echo '<br/>';
    //     echo 'Nombre de logs yahoo / slurp : '.$logs->getCountCrawler("Yahoo! Slurp");
    // }

    $title = 'Dimension Crawlers';
    $categories = "['googlebot', 'googlebot-mobile', 'googlebot-image', 'bingbot', 'yahoo / slurp', 'Google SEA', 'Majestic SEO']";
    $data = "[".($logs->getCountCrawler("Googlebot")-$logs->getCountCrawler("Googlebot-Mobile")-$logs->getCountCrawler("Googlebot-Image")).", 
            ".$logs->getCountCrawler("Googlebot-Mobile").", 
            ".$logs->getCountCrawler("Googlebot-Image").", 
            ".$logs->getCountCrawler("Bingbot").", 
            ".$logs->getCountCrawler("Yahoo! Slurp").",
            ".($logs->getCountCrawler("AdsBot-Google")+$logs->getCountCrawler("Mediapartners-Google")).",  
            ".$logs->getCountCrawler("MJ12bot")."]";


?>
