<?php

//to run: php vendor/bin/codecept run tests/acceptance/ShopPageCest.php --steps
class WhoWeArePageCest
{
    public function whoWeArePageWorks(AcceptanceTester $I){
        //going to 'who we are' page
        $I->amOnPage('swing_for_scholarships');

        $I->amGoingTo('Make sure every item in the page is clickable'); //comment to state intention

        //hole sponsor
        $I->amGoingTo('click the Hole Sponsor item');
        $I->click('//*[@id="main"]/div/header/div/div[1]/ul/li[1]/a/div[1]/img');
        $I->seeCurrentUrlEquals('/product/hole-sponsor/');
        $I->amOnPage('/golf-tournament');

        //golf tournament ticket
        $I->amGoingTo('click the Golf Tournament Ticket item');
        $I->click('//*[@id="main"]/div/header/div/div[1]/ul/li[2]/a/div[1]/img');
        $I->seeCurrentUrlEquals('product/golf-tournament-ticket/');
        $I->amOnPage('/golf-tournament');
    }
}