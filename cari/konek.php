<?php
        error_reporting(0);
        $curl = curl_init();
        $sc = $_POST['sc'];
        $cr = str_replace(" ","%",$sc);
        if($sc == ""){
                curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=youtube&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');
        }else{
                curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q='.$cr.'&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($data, true);
?>