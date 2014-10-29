<?php

class ModelUserTest extends TestCase {

  public function testHashPassword()
  {
    Hash::shouldReceive('make')->once()->andReturn('hashed');

    $user = new User;
    $user->password = 'password';

    $this->assertEquals('hashed', $user->password);
  }
}