<?php

class UserTest extends TestCase {
	
	public function mockUser ($name, $lastname, $password, $email, $tel)
	{
		$user = new CoreUser();
		$user->setName($name);
		$user->setLastname($lastname);
		$user->setPassword($password);
		$user->setEmail($email);
		$user->setTel($tel);
		
		return $user;
	}

	public function testCreateUser()
	{
	
		$mock = UserTest::mockUser ('Name','Lastname','qwerty','email@mail.com','0888888888');
		$repo = new Core\Storage\User\EloquentUserRepository();
		$data = $repo->save($mock);

		$this->assertEquals('Name',$data['name']);
		$this->assertEquals('Lastname',$data['lastname']);
		$this->assertEquals('qwerty',$data['password']);
		$this->assertEquals('email@mail.com',$data['email']);
		$this->assertEquals('0801234567',$data['tel']);
	}
}
