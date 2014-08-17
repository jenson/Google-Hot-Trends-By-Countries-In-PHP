<?php
class GoogleHotTrends {

   public function fetch_trends($cn_code)
    {
        $c = curl_init('http://www.google.'.$cn_code.'/trends/hottrends/atom/hourly');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $responsedata = curl_exec($c);
        curl_close($c);
        return $this->parse_trend_feed($responsedata);
    }

    private function parse_trend_feed($data){
        preg_match_all('/.+?<a href=".+?">(.+?)<\/a>.+?/',$data,$matches);
        return $matches[1];
    }
}
?>

