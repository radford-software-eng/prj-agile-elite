<?php

class RCDCest
{
    //to run: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php'
    //to run with detailed steps: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php --steps'
    //to run a specific test: 'php vendor/bin/codecept run tests/acceptance/FirstCest.php:{testname} --steps' (remove the brackets)
    //testing to see home page
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/'); //set current page to home page

        $I->see('Home'); //check if 'Home' is on page
        $I->see('Who We Are'); //check to see if 'Who We Are' is on page
        $I->see('Our Partners');
        $I->see('Contact Us');
        $I->see('Donate');

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

        $I->click('//*[@id="menu-item-133"]/a'); //click 'donate' link
        $I->seeCurrentUrlEquals('/donate'); //assert that url matches
        $I->amOnPage('/'); //return to home page

        

    }

    public function whoWeArePageWorks(AcceptanceTester $I){
            //going to 'who we are' page
            $I->amOnPage('/who-we-are');

            $I->amGoingTo('look at the strong heading element Our mission'); //comment to state intention
             $I->see('Our Mission', 'h3');
           

    }



    public function ourPartnersPageWorks(AcceptanceTester $I) {
        $I->amOnPage('/our-partners');

        $I->amGoingTo('click on every partner link to make sure it works'); //comment to state intention

        //testing Community Foundation of New River Valley link
        $I->amGoingTo('click the Community Foundation of New River Valley link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[1]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners'); //return to our-partners page

        //testing Radford University Foundation link
        $I->amGoingTo('click the Radford University Foundation link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[2]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/content/foundation/home.html');
        $I->amOnPage('/our-partners');

        //testing Price Williams Realty link
        $I->amGoingTo('click the Price Williams Realty link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[3]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing Carilion Clinic link
        $I->amGoingTo('click the Carilion Clinic link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[4]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing Ameriprise Financial link
        $I->amGoingTo('click the Ameriprise Financial link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[5]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing Radford City link
        $I->amGoingTo('click the Radford City link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[6]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing Radford Public Schools link
        $I->amGoingTo('click the Radford Public Schools link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[7]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing DIVAS link
        //TBD

        //testing United Way SW VA link
        $I->amGoingTo('click the United Way SW VA link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[9]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');
    }

    public function contactUsPageWorks(AcceptanceTester $I){
        $I->amOnPage('/contact-us'); //go to contact-us page

        $I->amGoingTo('submit "contact us" form with test values'); //comment to state intention

        $I->fillField('wpforms[fields][0]', 'Test User'); //fill name field
        $I->fillField('wpforms[fields][1]', 'test@test.com'); //fill email field
        $I->fillField('wpforms[fields][3]', 'This is a test'); //fill subject field
        $I->fillField('wpforms[fields][2]', 'Hopefully it works'); //fill message field
        $I->click('wpforms-submit-44'); //click button
    }

    public function formsPageWorks(AcceptanceTester $I){
        $I->amOnPage('/forms');
        $I->amGoingTo('click the Mixed Delivery Grant Form Button');//State intention

        //click Mixed Delivery Grant Form Button
        $I->click('//*[@id="Delivery-Grant-FormButton"]');

        //click Mixed Delivery Cover Letter Button
        $I->click('//*[@id="Cover_Letter_Form_Button"]');

    }
    
    /**
     * Fill out the Preschool Application Form
     */
    public function fillFinancialAssistanceApplication(AcceptanceTester $I){
        $I->amOnPage('/financial-assistance-application');
        $I->amGoingTo('fill out the fields of the PreSchool Application Form');

        //fill Child's name field(First,Middle,Last)
        $I->fillField('input_1.3','Sir');//fill first name field
        $I->fillField('input_1.6','James-Arthur');//fill last name field

        //fill Date of birth field
        $I->fillField('input_2','05/22/2007');

        //toggle Gender 'Male' radio button
       // $I->selectOption('input_3',);

       //fill out physical residence
       $I->fillField('input_4','Buckingham Palace');

       //fill out current/past preschool/childcare programs
       $I->fillField('input_6', 'n/a');

       //fill out parent/guardian information
       $I->fillField('input_13.3', 'Elizabeth');//first name
       $I->fillField('input_13.6', 'II');//last name
       $I->fillField('input_15', 'Queen');//relationship

       //fill out date of birth
       $I->fillField('input_16', '04/15/1920');
       
       //check lives with child radio button


       //fill out employer field
       $I->fillField('input_29', 'British Government');

       //fill out total hours per week
       $I->fillField('input_30', '90');

       //fill out home phone field
       $I->fillField('input_32', '8142208917');

       //fill out email field
       $I->fillField('input_33', 'brexit@gmail.com');

       //child insurance radio button

       //child insurance checkboxes
       $I->checkOption('input_36.3');

       //fill date of child's last physical
       $I->fillField('input_37', '04/15/2009');

       //fill date of last dentist visit
       $I->fillField('input_38', '04/15/2009');
    }

    /* 
    public function donationPageWorks(AcceptanceTester $I) {
        $I->amOnPage('/donate'); //go to donate page
        $I->amGoingTo('submit donation form with test values'); //comment to state intention

        //fill donation text box
        $I->fillField('//*[@id="give-amount-text"]','1000');
        $I->click('//*[@id="give-form-101-1"]/button');

        $I->fillField('//*[@id="give-first"]', 'Testing');
        $I->fillField('//*[@id="give-last"]', 'Testing');
        $I->fillField('//*[@id="give-email"]', 'Testing@test.com');

        //Expect a failure for now
        $I->see('Error: Please insert a valid donation amount.', "//*[@id='give_error_invalid_donation_amount']/p");

    }
    */

    
}
