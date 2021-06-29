<?php


use \PHPUnit\Framework\TestCase;

class UnitTest extends TestCase{
     
    protected $user;
    public function setUp() :void{
        $this->user=new \App\Models\User;
    }
    /** @test */
     public function testThatWeCanGetTheFirstName(){
         $this->user->setFirstName('Rana');
         $this->assertEquals($this->user->getFirstName(),'Rana');
     }

     public function testThatWeCanGetTheLasttName(){
     
         $this->user->setLastName('Sarkar');
         $this->assertEquals($this->user->getLastName(),'Sarkar');
     }

     public function testFullNameIsReturned(){
    
         $this->user->setFirstName('Rana');
         $this->user->setLastName('Sarkar');
         $this->assertEquals($this->user->getFullName(),'Rana Sarkar');
     }

     public function testEmailAddressCanBeSet(){
         $user=new \App\Models\User;
         $user->setEmail('rana@gmail.com');
         $this->assertEquals($user->getEmail(),'rana@gmail.com');
     }

     public function testEmailVariablesContainCorrectValues(){
         $user=new \App\Models\User;
         $user->setFirstName('Rana');
         $user->setLastName('Sarkar');
         $user->setEmail('rana@gmail.com');
         $emailVariables=$user->getEmailVariables();
         $this->assertArrayHasKey('full_name',$emailVariables);
         $this->assertArrayHasKey('email',$emailVariables);
         $this->assertEquals($emailVariables['full_name'],'Rana Sarkar');
         $this->assertEquals($emailVariables['email'],'rana@gmail.com');
     }
}