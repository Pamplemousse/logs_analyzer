<?php
    include('logs.php');
    $logs = new Logs();
    // getDimensionTypePages($logs);
    // function getDimensionTypePages($logs) {
    //     echo '<h1>Dimension type pages</h1>';
    //     echo 'Nombre de logs requ&ecirc;tant "/" : '.$logs->getCountHomePage("/");
    //     echo '<br/>';
    //     echo 'Nombre de logs requ&ecirc;tant "/v-" : '.$logs->getCountPage("/v-");
    //     echo '<br/>';
    //     echo 'Nombre de logs requ&ecirc;tant "/l-" : '.$logs->getCountPage("/l-");
    //     echo '<br/>';
    //     echo 'Nombre de logs requ&ecirc;tant "/f-" : '.$logs->getCountPage("/f-");
    //     echo '<br/>';
    //     echo 'Nombre de logs requ&ecirc;tant "/s-" ou "/sa-10" : '.($logs->getCountPage("/s-")+$logs->getCountPage("/sa-10"));
    // }
    $title = 'Dimension Type Pages';
    $categories = "['/', '/v-', '/l-', '/f-', '/s- ou /sa-10']";
    $data = "[".$logs->getCountHomePage("/").", ".$logs->getCountPage("/v-").", ".$logs->getCountPage("/l-").", ".$logs->getCountPage("/f-").", ".($logs->getCountPage("/s-")+$logs->getCountPage("/sa-10"))."]";
    include('chart_template.php');

?>
