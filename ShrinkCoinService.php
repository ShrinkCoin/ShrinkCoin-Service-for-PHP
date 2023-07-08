<?php
class ShrinkCoinService {
    private $api_key;
    
    public function __construct($api_key) {
        $this->api_key = $api_key;
    }
    
    public function shrinkURL($url, $is_instant = true) {
        $api_url = 'https://shrinkco.in/api/shrink';
        $parameters = array(
            'API_KEY' => $this->api_key,
            'URL' => $url,
            'IS_INSTANT' => $is_instant ? 'true' : 'false'
        );
        
        return $this->callAPI($api_url, $parameters);
    }
    
    public function deleteURL($id) {
        $api_url = 'https://shrinkco.in/api/delete';
        $parameters = array(
            'API_KEY' => $this->api_key,
            'ID' => $id
        );
        
        return $this->callAPI($api_url, $parameters);
    }
    
    public function checkURLClicks($id) {
        $api_url = 'https://shrinkco.in/api/clicks';
        $parameters = array(
            'API_KEY' => $this->api_key,
            'ID' => $id
        );
        
        return $this->callAPI($api_url, $parameters);
    }
    
    public function checkURLCampaignClicks($id, $campaign) {
        $api_url = 'https://shrinkco.in/api/campaign';
        $parameters = array(
            'API_KEY' => $this->api_key,
            'ID' => $id,
            'CAMPAIGN' => $campaign
        );
        
        return $this->callAPI($api_url, $parameters);
    }
    
    private function callAPI($url, $parameters) {
        $url .= '?' . http_build_query($parameters);
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
        return json_decode($response, true);
    }
}
?>
