# php-sms-gateway
php api for any sms gateway ,can be integrated on any php application  

## usage

     //initialize setting
    require_once('sms_api.php');
    
    //dont modify &recipient={recipient}&messsage={message}
    $url = "https://example.com/username=xxx&password=hhh&recipient={recipient}&messsage={message}";
    $sms = new sms_api();
    
    //send sms
    return $sms->send('+254712345678','test message');
