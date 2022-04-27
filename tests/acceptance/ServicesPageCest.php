<?php

//to run: php vendor/bin/codecept run tests/acceptance/BlogPageCest.php --steps
class BlogPageCest
{
    public function servicesPageWorks(AcceptanceTester $I)
    {
        //----------------//
        $I->amOnPage('/services');
        $I->see('Employment Opportunities at Radford Child Development Center');
        //$I->click('//*[@id="post-3156"]/div/div/div/section/div/div/div/div[3]/div/div/a'); //click button
        $I->amOnPage('/services');
    }
}