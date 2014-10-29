<?php

class BookTest extends TestCase {
	
	public function mockBook ($id_res, $id_user, $date, $amout, $time, $area)
	{
		$book = new CoreBook();
		$book->setIdRes($id_res);
		$book->setIdUser($id_user);
		$book->setDate($date);
		$book->setAmout($amout);
		$book->setTime($time);
		$book->setArea($area);
		
		return $book;
	}

	public function testSaveBook()
	{
	
		$mock = BookTest::mockBook ('99','55','2014-10-30','2','12:00','A');
		$repo = Mockery::mock('EloquentBookRepository');
		$data = $repo->save($mock);

		$this->assertEquals('99',$data->id_res);
		$this->assertEquals('55',$data->id_user);
		$this->assertEquals('2014-10-30',$data->date);
		$this->assertEquals('2',$data->amout);
		$this->assertEquals('12:00',$data->time);
		$this->assertEquals('A',$data->area);
	}
}
