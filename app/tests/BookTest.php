<?php

class BookTest extends TestCase {
	
	public function mockBook ($id_res, $id_user, $date, $amout, $time, $area)
	{
		$book = App::make('CoreBook');
		$book->setIdRes($id_res);
		$book->setIdUser($id_user);
		$book->setDate($date);
		$book->setAmout($amout);
		$book->setTime($time);
		$book->setArea($area);
		
		return $book;
	}

	public function testBook()
	{
	
		$mock = BookTest::mockBook ('99','55','2014-10-30','2','12:00','A');

		$this->assertEquals('99',$mock->getIdRes());
		$this->assertEquals('55',$mock->getIdUser());
		$this->assertEquals('2014-10-30',$mock->getDate());
		$this->assertEquals('2',$mock->getAmout());
		$this->assertEquals('12:00',$mock->getTime());
		$this->assertEquals('A',$mock->getArea());
	}
}
