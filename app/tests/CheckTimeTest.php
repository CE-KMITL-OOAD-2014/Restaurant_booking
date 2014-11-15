<?php

class CheckTimeTest extends TestCase {


	public function testLateTime()
	{
		// Arrange
		$onTime = date("H:i", strtotime("+5 minute", strtotime(date("H:i"))));
		$lateTime = date("H:i", strtotime("-30 minute", strtotime(date("H:i"))));

		//Act
		$checker = new CheckTime;
		$result_True = $checker->checkLateTime($onTime);
		$result_notTrue = $checker->checkLateTime($lateTime);

		//Assert
		$this->assertEquals(true,$result_True);
		$this->assertNotEquals(true,$result_notTrue);
	}
}
