<?php

//to run: php vendor/bin/codecept run tests/acceptance/BlogPageCest.php --steps
class BlogPageCest
{
    public function blogpageWorks(AcceptanceTester $I)
    {
        //----------------//
        $I->amOnPage('/blog');
        $I->see('Block');
    }
}