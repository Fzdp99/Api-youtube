<?php
        error_reporting(0);
        $curl = curl_init();
        $ktg = $_POST['ktgi'];
        switch ($ktg) {
                case 1:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%facebook&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 2:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%instagram&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 3:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%youtube&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 4:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%twitter&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 5:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%whatsapp&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 6:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%telegram&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 7:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%line&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 8:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%google%map&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                case 9:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%indodax&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');
                        
                        break;
                case 10:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=api%binance&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');

                        break;
                default:
                        curl_setopt($curl, CURLOPT_URL, 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=50&q=Application%20Programming%20Interface&key=AIzaSyDNk2bibYkXkfr--dNPHyTf-yjRTi1ubd0');
                        
                        break;
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($data, true);
        // var_dump($data);
?>