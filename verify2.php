<?php
$access_token = 'Ww5c+KuorvUC0AxNQcvqLbyE72Z+MKs1MNFWDaI2r12IKf+yNTIJ/9tsAKswXr9ypMleVj1HoIwabVQUwPU2Id2qsWaR2vGedgaueYFzeiygwZURiYrKhF2FZnVJ0O4tb/5AoHpgnBUe4tCD4uvblgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer '. $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;