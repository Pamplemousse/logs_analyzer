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

        public function getCountHomePage() {
            return $this->collection->count(array('Url' => "/"));
        }

        public function getCountPage($url) {
            return $this->collection->count(array('Url' => array('$regex' => $url)));
        }

        public function getCountCrawler($crawler) {
            return $this->collection->count(array('UserAgent' => array('$regex' => $crawler, '$options' => 'i')));
        }

        // This regexp seems not working
        public function getCountSearchEngine($searchEngine) {
            // return $this->collection->find(array('DateTime' => '27/08/2012 18:06'));
            return $this->collection->count(array('Referer' => array('$regex' => $searchEngine, '$options' => 'i')));
        }

        public function getCountHttpCode($HttpCode) {
            return $this->collection->count(array('HttpCode' => array('$regex' => $HttpCode, '$options' => 'i')));
        }

    }

?>
