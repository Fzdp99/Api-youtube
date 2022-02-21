<?php
        error_reporting(0);
        $curl = curl_init();
        $sc = $_POST['sc'];
        $cr = str_replace(" ","%",$sc);
        if($sc == ""){
                curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&eventType=live&maxResults=50&q=news&type=video&key=YOUR_KEY');
        }else{
                curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&eventType=live&maxResults=50&q='.$cr.'&type=video&key=YOUR_KEY');
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($data, true);
?>
