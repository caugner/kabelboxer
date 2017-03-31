<?php

use KabelBoxer\Client;

class ClientTest extends \PHPUnit\Framework\TestCase {

  public function testConstructor() {
    $client = new Client();
    $this->assertNotNull($client);
  }

}
