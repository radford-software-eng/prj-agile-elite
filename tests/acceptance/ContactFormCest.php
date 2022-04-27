<?php

class ContactFormCest{

    //to run: 'php vendor/bin/codecept run tests/acceptance/ContactFormCest.php'
    //to run with detailed steps: 'php vendor/bin/codecept run tests/acceptance/ContactFormCest.php --steps'
    //to run a specific test: 'php vendor/bin/codecept run tests/acceptance/ContactFormCest.php:{testname} --steps' (remove the brackets)
    //testing to see if contact form works properly


    public function contactUsPageWorks(AcceptanceTester $I){
        $I->amOnPage('/contact-us'); //go to contact-us page

        $I->amGoingTo('submit "contact us" form with test values'); //comment to state intention
        $I->seeElement('//*[@id="post-8"]/div/div/section[1]');

        //Test: Fill out all fields with valid values
        //-----------------------------------------------------------------------//
        $I->fillField('wpforms[fields][0]', 'Test User'); //fill name field
        $I->fillField('wpforms[fields][1]', 'test@test.com'); //fill email field
        $I->fillField('wpforms[fields][3]', 'This is a test'); //fill subject field
        $I->fillField('wpforms[fields][2]', 'Hopefully it works'); //fill message field
        $I->click('//*[@id="wpforms-submit-44"]'); //click button


        //Test: Don't fill out name field
        //-----------------------------------------------------------------------//
        $I->amOnPage('/contact-us'); //go to contact-us page
        $I->fillField('wpforms[fields][1]', 'test@test.com'); //fill email field
        $I->fillField('wpforms[fields][3]', 'This is a test'); //fill subject field
        $I->fillField('wpforms[fields][2]', 'Hopefully it works'); //fill message field
        $I->click('//*[@id="wpforms-submit-44"]'); //click button
        $I->see('This field is required.', 'label');

        //Test: Don't fill out email field
        //-----------------------------------------------------------------------//
        $I->amOnPage('/contact-us'); //go to contact-us page
        $I->fillField('wpforms[fields][0]', 'Test User'); //fill name field
        $I->fillField('wpforms[fields][3]', 'This is a test'); //fill subject field
        $I->fillField('wpforms[fields][2]', 'Hopefully it works'); //fill message field
        $I->click('//*[@id="wpforms-submit-44"]'); //click button
        $I->see('This field is required.', 'label');

        //Test: Don't fill out subject field
        //-----------------------------------------------------------------------//
        $I->amOnPage('/contact-us'); //go to contact-us page
        $I->fillField('wpforms[fields][0]', 'Test User'); //fill name field
        $I->fillField('wpforms[fields][1]', 'test@test.com'); //fill email field
        $I->fillField('wpforms[fields][2]', 'Hopefully it works'); //fill message field
        $I->click('//*[@id="wpforms-submit-44"]'); //click button
        $I->see('This field is required.', 'label');
    }


}

?>