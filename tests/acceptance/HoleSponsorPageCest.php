<?php

//to run: php vendor/bin/codecept run tests/acceptance/HoleSponsorPageCest.php --steps
class HoleSponsorPageCest
{
    public function holeSponsorPageWorks(AcceptanceTester $I){
        //going to 'forms' page
        $I->amOnPage('/product/hole-sponsor');
        $I->seeCurrentUrlEquals('/product/hole-sponsor');

        $I->amGoingTo('Add a hole sponsor to the shopping cart');
        $I->see('Hole Sponsor', 'h1'); 
        $I->click('//*[@id="product-3151"]/div[2]/form/button'); //clicking add to cart button

    }
}