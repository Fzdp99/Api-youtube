<?php
        error_reporting(0);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&chart=mostPopular&regionCode=ID&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($data, true);      
?>