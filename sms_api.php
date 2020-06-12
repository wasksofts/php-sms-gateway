<?php 
/**
 * sms_api
 *
 *  @category   Libraries
 *  @license    MIT License (http://opensource.org/licenses/MIT)
 *  @author     steven kamanu
 *  @website    www.wasksofts.com
 *  @version    1.0
 */

class sms_api
{
    public function __construct($sms_api_url)
    {
        $this->url =  $sms_api_url;
    }

    public function send($recipient, $message)
    {
        $arryparam = ["{recipient}"=> $recipient, "{message}"=> urlencode($message)];
        $url =  str_replace(array_keys($arryparam), array_values($arryparam), $this->url);
      
      //return api sms gateway result array object
        if (json_decode($this->httpGet($url))->Status === 0) {
            return TRUE;
        }
        return FALSE;
    }

    private function httpGet($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $output = curl_exec($curl);

        curl_close($curl);
        return $output;
    }
}
