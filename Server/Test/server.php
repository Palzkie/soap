<?php
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('display_errors', 1);

class MySoapServer {
  public function displayString($message) {
    return "The Message I received: " . $message;
  }
}

$options = array(
  'uri' => 'http://example.com/soap',
  'location' => 'http://localhost:8081/Test/server.php'
);

$server = new SoapServer(null, $options);
$server->setClass('MySoapServer');
$server->handle();

?>