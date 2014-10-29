<?php

class RegisRestaurantTest extends TestCase {


  public function testRestaurantCreate()
  {
    $mock = Mockery::mock('Core\Storage\Restaurant\RestaurantRepository');
    $mock->shouldReceive('save')->once();

    $this->app->instance('Core\Storage\Restaurant\RestaurantRepository', $mock);

    $this->call('POST', 'regisres_action');
  }
}