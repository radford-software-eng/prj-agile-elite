<?php

//to run: php vendor/bin/codecept run tests/acceptance/BlogPageCest.php --steps
class BlogPageCest
{
    public function blogpageWorks(AcceptanceTester $I)
    {
        //----------------//
        $I->amOnPage('/blog');
        $I->see('INTERACT WITH US!');
        $I->click('//*[@id="post-3156"]/div/div/div/section/div/div/div/div[3]/div/div/a'); //click button
        $I->amOnPage('/blog');
    }
}