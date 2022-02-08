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
       // $I->click('//*[@id="Cover_Letter_Form_Button"]');

    }
    
    /**
     * Fill out the Preschool Application Form
     */
    public function fillFinancialAssistanceApplication(AcceptanceTester $I){
        $I->amOnPage('/financial-assistance-application');
        $I->amGoingTo('fill out the fields of the PreSchool Application Form');

        //Child's Name
        $I->fillField('input_1.3','Edmund');
        $I->fillField('input_1.6','Bond');

        //Dateof birth
        $I->fillField('input_2','02/14/2000');

        //Sex
        $I->selectOption('input_3','Male');

        //Physical Residence
        $I->fillField('input_4','800 New River Drive');

        //ParentGuardian Info
        $I->fillField('input_13.3','Hannah');//first name
        $I->fillField('input_13.6','Montana');//last name
        $I->fillField('input_16','02/14/1970');//DATE of birth

        $I->selectOption('input_17','Yes');//lives with child

        $I->fillField('input_18','Radford Child Development Inc.');//Employer

        $I->fillField('input_19', '60');//Total hours per week

        $I->fillField('input_20','4049993490');//Work phone#
        $I->fillField('input_21','7032238907');//Home phone#

        $I->fillField('input_22','edmund_amankwah@yahoo.com');//email

        $I->selectOption('input_35','No');//Child Insurance check

        $I->fillField('input_37','01/23/2022');//Last Physical
        $I->fillField('input_38','01/20/2022');//Last Dentist visit

        //Program Selection
        //First choice
        $I->selectOption('input_42','Radford City Public Schools Virginia Preschool Initiative (VPI)');

        //second Choice
        $I->selectOption('input_96','Head Start full day school day located at McHarg Elem School for 4-year olds');

        $I->selectOption('input_53.1','1');//Photograph consent
        $I->fillField('input_54','02/08/2022');//Date


        //Additional Family Information
        //Special Needs Awareness
        $I->selectOption('input_60.3','Hearing Impairment');//Hearing Impairment
        $I->selectOption('input_61.1','Speech /Language Disorders');//Speech/language Disorder
        $I->selectOption('input_62.2','Visual Impairment');//Visual Impairment

        //Covid Impact
        $I->selectOption('input_68','Yes');//Family Impacted BY Covid
        $I->fillField('input_69','Long term hospital care');

        //Does Child recieve special education services?
        $I->selectOption('input_71','No');

        //Does child have any chronic health conditions
        $I->selectOption('input_73','No');

        //Foster Child?
        $I->selectOption('input_76','No');

        //Primary Language in Household
        $I->selectOption('input_77','English');

        //Parent/Guardian education
        $I->selectOption('input_108','Has GED/Diploma');

        //Parent Work/school
        $I->selectOption('input_117','Work 30+ hours a week');

        //Housing Benefits
        $I->selectOption('input_80.1','Housing/Rental Assistance');

        //Available to transport
        $I->selectOption('input_82','Yes');
        $I->selectOption('input_83','No');//To a Bus stop?
        
        //Annual family income
        $I->fillField('input_89','38,000');

        //How did you hear about program
        $I->fillField('input_90','Family friend');

        //Submit button
        $I->click('Submit');
    }
    

    
}
