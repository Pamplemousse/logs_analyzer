<?php

    include('logs.php');
    $logs = new Logs();

    // getFaits($logs);
    // getDimensionTypePages($logs);
    // getDimensionCrawlers($logs);
    getDimensionSearchEngine($logs);


    function getFaits($logs) {
        echo '<h1>Faits</h1>';
        echo 'Nombre de logs : '.$logs->getLogsCount();

        // ==> following not working
        // echo '<br/>';
        // echo 'Moyenne des temps de r&eacute;ponse : '.$logs->getAverageResponseTime;
        // echo '<br/>';
        // echo 'Moyenne des tailles de r&eacute;ponse : '.$logs->getAverageResponseSize;
    }


    function getDimensionTypePages($logs) {
        echo '<h1>Dimension type pages</h1>';
        echo 'Nombre de logs requ&ecirc;tant "/" : '.$logs->getCountHomePage("/");
        echo '<br/>';
        echo 'Nombre de logs requ&ecirc;tant "/v-" : '.$logs->getCountPage("/v-");
        echo '<br/>';
        echo 'Nombre de logs requ&ecirc;tant "/l-" : '.$logs->getCountPage("/l-");
        echo '<br/>';
        echo 'Nombre de logs requ&ecirc;tant "/f-" : '.$logs->getCountPage("/f-");
        echo '<br/>';
        echo 'Nombre de logs requ&ecirc;tant "/s-" ou "/sa-10" : '.($logs->getCountPage("/s-")+$logs->getCountPage("/sa-10"));
    }


    function getDimensionCrawlers($logs) {
        echo '<h1>Dimension crawlers</h1>';
        echo 'Nombre de logs googlebot : '.$logs->getCountCrawler("Googlebot");
        echo '<br/>';
        echo 'Nombre de logs googlebot-mobile : '.$logs->getCountCrawler("Googlebot-Image");
        echo '<br/>';
        echo 'Nombre de logs bingbot : '.$logs->getCountCrawler("Bingbot");
        echo '<br/>';
        echo 'Nombre de logs yahoo / slurp : '.$logs->getCountCrawler("Yahoo! Slurp");
    }


    function getDimensionSearchEngine($logs) {
        echo '<h1>Dimension search engine</h1>';
        echo 'Nombre de logs Google : '.$logs->getCountSearchEngine("google");
        echo '<br/>';
        echo 'Nombre de logs Yahoo : '.$logs->getCountSearchEngine("yahoo");
        echo '<br/>';
        echo 'Nombre de logs Bing : '.$logs->getCountSearchEngine("bing");
    }

?>
