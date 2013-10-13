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


    function getDimensionTypePages() {
        $m = new Mongo;
        $collection = $m->selectDB("logs_analyzer")->selectCollection('logs');

        // $cursor = $collection->find(array(
        //     "Url" => "/"
        // ));
        // foreach($cursor as $row) var_dump($row);
    }


?>
