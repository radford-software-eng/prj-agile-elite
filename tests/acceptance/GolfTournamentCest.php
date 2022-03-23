<?php

//to run: php vendor/bin/codecept run tests/acceptance/GolfTournamentCest.php --steps
class BlogPageCest
{

    public function golfTournamentTest1(AcceptanceTester $I)
    {
        //Buy 1 golf tournament ticket
        //----------------//
        $I->amOnPage('/golf-tournament');
        $I->see('GOLF TOURNAMENT');

        $I->click('//*[@id="main"]/div/header/div/div[1]/ul/li/div[2]/a'); //click button to add golf ticket to cart    
        $I->amOnPage('/cart');

        $I->amOnPage('/checkout');

        $I->fillField('//*[@id="billing_first_name"]','John'); //First Name
        $I->fillField('//*[@id="billing_last_name"]','Doe'); //Last Name

        //$I->selectOption('.select2-selection select2-selection--single', 'United States (US)'); //Country: US
        //$I->click('//*[@id="select2-billing_country-container"]'); //country field
        //$I->click('//*[@id="post-2963"]/div/div/div[2]/div/div/a');


        $I->fillField('//*[@id="billing_address_1"]','111 Test St'); //Address

        $I->fillField('//*[@id="billing_city"]','Fake City'); //Town/City  
        
        //$I->selectOption('#select2-billing_state-container', 'California'); //State: California

        $I->fillField('//*[@id="billing_postcode"]','22222'); //Zip Code

        $I->fillField('//*[@id="billing_phone"]','997-997-9979'); //Phone Number

        //expect a failure here
        $I->fillField('//*[@id="root"]/form/span[2]/div/div[2]/span/input','4242424242424242'); //CC number

        $I->fillField('//*[@id="root"]/form/span[2]/span/input','0424'); //Expiration date

        $I->fillField('//*[@id="root"]/form/span[2]/span/input','424'); //CVC Code

        $I->see('The card was declined.');

    }
}