<?php

//to run: php vendor/bin/codecept run tests/acceptance/DonationFormCest.php --steps
class BlogPageCest
{
    
    //fill out all fields w/ valid inputs
    //expect a failure
    public function donationFormCest(AcceptanceTester $I)
    {
        //Donate
        //----------------//
        $I->amOnPage('/donate');
        //$I->see('Support Our Cause');
        $I->wait(3);

        $I->click('//*[@id="give-form-3077-1"]/div[1]/button'); //click button to go to donation form
        $I->wait(3);

        $I->fillField('//*[@id="give-amount"]','25'); //enter donation amt
        $I->wait(3);
        $I->click('//*[@id="give-form-3077-1"]/div[2]/button'); //click button to continue to info form
        $I->wait(3);

        $I->fillField('//*[@id="root"]/form/div/div[2]/span[1]/span[2]/div/div[2]/span/input','4242424242424242'); //enter CC num
        
        $I->fillField('//*[@id="root"]/form/div/div[2]/span[2]/span/span/input','0424');
        $I->fillField('//*[@id="root"]/form/div/div[2]/span[3]/span/span/input','424');
        
        $I->fillField('//*[@id="root"]/form/div/div[2]/span[4]/span/span/input','42424');

        $I->click('//*[@id="give-purchase-button"]'); //Submit donation form
    }
}