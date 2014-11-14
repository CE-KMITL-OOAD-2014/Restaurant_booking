<?php

class AvailSeatTest extends TestCase {

	public function testAvailSeat () {

		$data[0] = Mockery::mock('EloquentRestaurantRepository')->shouldReceive('find')->with(1)->andReturn('NULL');
		$data[1] = Mockery::mock('EloquentRestaurantRepository')->shouldReceive('find')->with(3)->andReturn('NULL');
		$data[2] = Mockery::mock('EloquentRestaurantRepository')->shouldReceive('find')->with(5)->andReturn('NULL');
		$data[3] = Mockery::mock('EloquentRestaurantRepository')->shouldReceive('find')->with(2)->andReturn('OK');
		$data[4] = Mockery::mock('EloquentRestaurantRepository')->shouldReceive('find')->with(4)->andReturn('OK');
		
		$restaurant = new  RestaurantController($data);

		$this->assertEquals('NULL',$restaurant->show(1));
		$this->assertEquals('NULL',$restaurant->show(3));
		$this->assertEquals('NULL',$restaurant->show(5));

		$this->assertNotEquals('NULL',$restaurant->show(2));
		$this->assertNotEquals('NULL',$restaurant->show(4));

	}
}