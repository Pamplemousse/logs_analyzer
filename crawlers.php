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
    $title      = 'Dimension Crawlers';
    $categories = "['googlebot', 'googlebot-mobile', 'bingbot', 'yahoo / slurp']";
    $data       = "[".$logs->getCountCrawler("Googlebot").", ".$logs->getCountCrawler("Googlebot-Image").", ".$logs->getCountCrawler("Bingbot").", ".$logs->getCountCrawler("Yahoo! Slurp")."]";
    include('chart_template.php');

?>
