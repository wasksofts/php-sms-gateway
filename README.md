# php-sms-gateway
php api for any sms gateway ,can be integrated on any php application  

## usage

require_once('../sms_api.php');
$url = "https://example/username=xxx&password=hhh&recepient={recipient}&messsage={message}";
$sms = new sms_api();
return $sms->send('+254712345678','test');
