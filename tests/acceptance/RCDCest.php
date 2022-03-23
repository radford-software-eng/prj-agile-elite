<?php

class RCDCest
{
    //to run: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php'
    //to run with detailed steps: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php --steps'
    //to run a specific test: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php:{testname} --steps' (remove the brackets)
    //testing home page
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/'); //set current page to home page

        $I->see('Home'); //check if 'Home' is on page
        $I->see('Who We Are'); //check to see if 'Who We Are' is on page
        $I->see('Our Partners');
        $I->see('Contact Us');
        $I->see('Donate');
        $I->see('Blog');

        //$I->see('65gsgfdsgfds'); //example of test fail

        
        //testing page links
        $I->amGoingTo('Click on every link on this page to make sure it works'); //comment to state intention
        $I->click('//*[@id="menu-item-12"]/a'); //click 'who we are' link
        $I->seeCurrentUrlEquals('/who-we-are'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        $I->click('//*[@id="menu-item-10"]/a'); //click 'our partners' link
        $I->seeCurrentUrlEquals('/our-partners'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        $I->click('//*[@id="menu-item-9"]/a'); //click 'contact us' link
        $I->seeCurrentUrlEquals('/contact-us'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        $I->click('//*[@id="menu-item-3162"]/a'); //click 'blog' link
        $I->seeCurrentUrlEquals('/blog'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        $I->click('//*[@id="menu-item-2849"]/a'); //click 'forms' link
        $I->seeCurrentUrlEquals('/forms'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        $I->click('//*[@id="menu-item-133"]/a'); //click 'donate' link
        $I->seeCurrentUrlEquals('/donate'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        

    }

    public function donationPageWorks(AcceptanceTester $I) {
        $I->amOnPage('/donate'); //go to donate page
        $I->amGoingTo('submit donation form with test values'); //comment to state intention

        $I->fillField('//*[@id="give-first"]', 'Testing');
        $I->fillField('//*[@id="give-last"]', 'Testing');
        $I->fillField('//*[@id="give-email"]', 'Testing@test.com');

        //Expect a failure for now
        $I->see('Error: Please insert a valid donation amount.', "//*[@id='give_error_invalid_donation_amount']/p");

    }
}
