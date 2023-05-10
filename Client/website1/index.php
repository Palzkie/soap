<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SOAP Client</title>
</head>
<body>
  <h1>SOAP Client</h1>
  <?php
  $options = array(
   'location' => 'http://localhost:8081/Test/server.php',
    'uri' => 'http://example.com/soap'
  );
  
  $client = new SoapClient(null, $options);
  $message = 'Add Product Milo';
  
  $result = $client->displayString($message);
  
  echo "<p>Message sent: $message</p>";
  ?>
  <p>Message from server: <?php echo $result; ?></p>
</body>
</html>