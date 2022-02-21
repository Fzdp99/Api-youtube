<?php
        error_reporting(0);
        $curl = curl_init();
        $ktg = $_POST['ktgi'];
        switch ($ktg) {
                case 1:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%facebook&key=YOUR_KEY');

                        break;
                case 2:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%instagram&key=YOUR_KEY');

                        break;
                case 3:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%youtube&key=YOUR_KEY');

                        break;
                case 4:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%twitter&key=YOUR_KEY');

                        break;
                case 5:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%whatsapp&key=YOUR_KEY');

                        break;
                case 6:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%telegram&key=YOUR_KEY');

                        break;
                case 7:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%line&key=YOUR_KEY');

                        break;
                case 8:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%google%map&key=YOUR_KEY');

                        break;
                case 9:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%indodax&key=YOUR_KEY');
                        
                        break;
                case 10:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%binance&key=YOUR_KEY');

                        break;
                default:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=Application%20Programming%20Interface&key=YOUR_KEY');
                        
                        break;
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($data, true);
        // var_dump($data);
?>
