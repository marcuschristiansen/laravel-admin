<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic functional login example.
     *
     * @return void
     */
    public function testLoginUserSuccess()
    {
        $this->visit('/login')
             ->type('marcus@clc.agency', 'email')
             ->type('5ecret_p@55w0rd', 'password')
             ->press('Submit')
             ->seePageis('/home');
    }

    public function testLoginUserFail()
    {
        $this->visit('/login')
             ->type('no@email.com', 'email')
             ->type('wrong_password', 'password')
             ->press('Submit')
             ->seePageis('/login');
    }
}
