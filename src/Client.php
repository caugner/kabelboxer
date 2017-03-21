<?php

namespace KabelBoxer;

use GuzzleHttp\Client as HttpClient;

class Client {

  const DEFAULT_URI = 'http://kabel.box';
  const DEFAULT_TIMEOUT = 5.0;

  private $uri;
  private $timeout;

  public function __construct($uri=null, $timeout=null) {
    $this->uri = $uri ?: self::DEFAULT_URI;
    $this->timeout = $timeout ?: self::DEFAULT_TIMEOUT;
  }

  public function ping() {
    $client = $this->createClient();
    try {
      $client->request('GET');
      return true;
    } catch (Exception $e) {
      return false;
    }
  }

  public function login(string $username, string $password) {
    $token = $this->getToken();
    $response = $this->setter([
      'token' => $token,
      'fun' => 15,
      'Username' => $username,
      'Password' => $password,
    ]);
    // - successful
    // - KDGloginincorrect
    return $response->getBody();
  }

  public function restart() {
    $token = $this->getToken();
    $response = $this->setter([
      'token' => $token,
      'fun' => 8,
    ]);
    return $response;
  }

  private function getToken() {
    $response = $this->getter(['fun' => 3]);
    $body = $response->getBody();
    $xml = simplexml_load_string($body);
    return $xml->Token;
  }

  private function getter(array $params) {
    $client = $this->createClient();
    $response = $client->request('POST', '/xml/getter.xml', [
      'form_params' => $params
    ]);
    return $response;
  }

  private function setter(array $params) {
    $client = $this->createClient();
    $response = $client->request('POST', '/xml/setter.xml', [
      'form_params' => $params
    ]);
    return $response;
  }

  private function createClient() {
    return new HttpClient([
      'base_uri' => $this->uri,
      'timeout' => $this->timeout
    ]);
  }
}
