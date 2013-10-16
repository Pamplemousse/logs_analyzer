<?php
    include('logs.php');
    $logs = new Logs();
    getFaits($logs);
    function getFaits($logs) {
        echo '<h1>Faits</h1>';
        echo 'Nombre de logs : '.$logs->getLogsCount();

        // ==> following not working
        echo '<br/>';
        echo 'Moyenne des temps de r&eacute;ponse : ';
        $pouet = $logs->getAverageResponseTime();
        print_r($pouet['result'][0]['avgResponseTime']);
        echo '<br/>';
        // echo 'Moyenne des tailles de r&eacute;ponse : '.$logs->getAverageResponseSize();
    }

?>
