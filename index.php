<?php

    include('logs.php');
    $logs = new Logs();

    // getFaits($logs);
    getDimensionTypePages($logs);




    // Return : number of logs, response time average and response size average
    function getFaits($logs) {
        echo '<h1>Faits</h1>';
        echo 'Nombre de logs : '.$logs->getLogsCount();
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


?>
