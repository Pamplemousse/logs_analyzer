<?php

    $m = new MongoClient();
    $db = $m->selectDB("logs_analyzer");
    $file = fopen('02_logs.csv', 'r');
    if ($file) {
        while (!feof($file)) {
            $buffer = fgets($file);
            $buffer = explode(';', $buffer);
            $i = 9;
            if ($buffer[9][0] == '"') {
                $useragent = '';
                while (!preg_match('/."/i', $buffer[$i])) {
                    $useragent .= $buffer[$i].';';
                    $i ++;
                }
                $useragent .= $buffer[$i];
            } else {
                $useragent = $buffer[9];
            }
            $data = array(
                'LogId'        => $buffer[0],
                'DateTime'     => $buffer[1],
                'SrcIP'        => $buffer[2],
                'Method'       => $buffer[3],
                'Url'          => $buffer[4],
                'QueryString'  => $buffer[5],
                'HttpCode'     => $buffer[6],
                'ResponseSize' => (int) $buffer[7],
                'ResponseTime' => (int) $buffer[8],
                'UserAgent'    => $useragent,
                'Referer'      => $buffer[$i+1],
                'OriginId'     => $buffer[$i+2],
                'SiteName'     => $buffer[$i+3],
                'SiteId'       => $buffer[$i+4],
                'datmod'       => $buffer[$i+5]
            );
            $db->logs->insert($data);
        }
        fclose($file);
    }

?>
