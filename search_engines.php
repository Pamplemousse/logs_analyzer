<?php
    include('logs.php');
    $logs = new Logs();
    getDimensionSearchEngine($logs);
    function getDimensionSearchEngine($logs) {
        echo '<h1>Dimension search engine</h1>';
        echo 'Nombre de logs Google : '.$logs->getCountSearchEngine("google");
        echo '<br/>';
        echo 'Nombre de logs Yahoo : '.$logs->getCountSearchEngine("yahoo");
        echo '<br/>';
        echo 'Nombre de logs Bing : '.$logs->getCountSearchEngine("bing");
    }

?>
