<?php

//to run: php vendor/bin/codecept run tests/acceptance/BlogPageCest.php --steps
class BoardMembersPageCest
{
    public function boardMembersPageWorks(AcceptanceTester $I)
    {
        //----------------//
        $I->amOnPage('/board-members');
        $I->see('BOARD MEMBERS');
        //$I->click('//*[@id="post-3156"]/div/div/div/section/div/div/div/div[3]/div/div/a'); //click button
        $I->seeElement('//*[@id="post-3235"]/div/div/section[1]/div');
        
    }
}