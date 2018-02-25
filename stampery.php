<?php
require 'vendor/autoload.php';

$hash = "2413fb3709b05939f04cf2e92f7d0897fc2596f9ad0b8a9ea855c7bfebaae892";



class Stampery {
  public $stampery_client_id = "c4f3e151e3b981d";
  public $stampery_secret = "5402bb09";

  function uploadHashToBlockchain($hash) {
    $client = new GuzzleHttp\Client();
    return $client->request('POST', 'https://api-prod.stampery.com/stamps', [
        'auth' => [$this->stampery_client_id, $this->stampery_secret],
        'json' => ['hash' => $hash],
        'http_errors' => false
                                                                             ]);
  }

  function isHashInBlockchain($hash) {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://api-prod.stampery.com/stamps/' . $hash, [
        'auth' => [$this->stampery_client_id, $this->stampery_secret],
        'http_errors' => false
                                                                             ]);
    $body = json_decode($res->getBody());

    if (sizeof($body->result)) {
      $result = $body->result[0];
      return json_encode($result, JSON_PRETTY_PRINT);
    } else {
      return false;
    };
  }
}
?>