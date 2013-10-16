<?php
    include('logs.php');
    $logs = new Logs();

    $title = 'Codes HTTP';
    $categories = "['200', '301', '302', '304', '400', '404', '500']";
    $data = "[".$logs->getCountHttpCode("200").",
            ".$logs->getCountHttpCode("301").",
            ".$logs->getCountHttpCode("302").",
            ".$logs->getCountHttpCode("304").",
            ".$logs->getCountHttpCode("400").",
            ".$logs->getCountHttpCode("404").",
            ".$logs->getCountHttpCode("500")."]";
    include("chart_template.php");

?>
