<?php

    class Logs {

        private $collection;

        public function __construct() {
            $m = new Mongo;
            $this->collection = $m->selectDB("logs_analyzer")->selectCollection('logs');
        }

        public function getLogsCount() {
            return $this->collection->count();
        }

        public function getAverageResponseTime() {
            // db.logs.aggregate( { "$group": { _id: "ponyponypony", averageResponseTime: { $avg: "$ResponseTime"}}})
            // --> la requête du dessus marche un peu dans la console (erreur de signe, dépassement de la taille en mémoire ?) mais ne donne rien dans ce langage de $*!# :
            // echo '<pre>';
            // print_r($collection->aggregate(array(
            //     '$group' => array(
            //         '_id'             => 'youareamonkey',
            //         'avgResponseTime' => array( '$avg' : "$ResponseTime" )
            //     )
            // )));
            // echo '</pre>';
        }

        public function getAverageResponseSize() {
            // db.logs.aggregate( { "$group": { _id: "ponyponypony", averageResponseTime: { $avg: "$ResponseSize"}}})
            // --> pareil qu'au dessus
        }

    }

?>
