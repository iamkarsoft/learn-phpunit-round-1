<?php



use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;

		$user->setFirstName("Billy");
		$this->assertEquals($user->getFirstName(), 'Billy');
	}

	public function testThatWeCanGetTheLastName()
	{
		$user = new \App\Models\User;

		$user->setLastName('Amoussou');
		$this->assertEquals($user->getLastName(),'Amoussou');
	}
}