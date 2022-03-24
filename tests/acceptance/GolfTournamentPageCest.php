<?php

//to run: php vendor/bin/codecept run tests/acceptance/GolfTournamentPageCest.php --steps
class HoleSponsorPageCest
{
    public function holeSponsorPageWorks(AcceptanceTester $I){
        //going to 'forms' page
        $I->amOnPage('/product/golf-tournament-ticket');
        $I->seeCurrentUrlEquals('/product/golf-tournament-ticket');

        $I->amGoingTo('Add a golf tournament ticket to the shopping cart');
        $I->see('Golf Tournament Ticket', 'h1'); 
        $I->click('//*[@id="product-3062"]/div[2]/form/button'); //clicking add to cart button

    }
}