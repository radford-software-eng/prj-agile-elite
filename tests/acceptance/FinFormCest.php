<?php

class FinFormCest
{
    //to run: 'php vendor/bin/codecept run tests/acceptance/FinFormCest.php'
    //to run with detailed steps: 'php vendor/bin/codecept run tests/acceptance/FinFormCest.php --steps'
    //to run a specific test: 'php vendor/bin/codecept run tests/acceptance/FinFormCest.php:{testname} --steps' (remove the brackets)
    //testing to see home page


    //Testing when every field gets filled out correctly
    public function FinancialAssistPageTest1(AcceptanceTester $I) {
        $I->amOnPage('/financeassistformtest'); //go to form preview page
        $I->amGoingTo('submit financial assistance app form with test values'); //comment to state intention

        //...............................................................................//
        $I->amGoingTo('Submit childs information');
        $I->fillField('//*[@id="input_3_1_3"]', 'Jim'); //Child's first name
        $I->fillField('//*[@id="input_3_1_6"]', 'Doe'); //Child's last name
        $I->fillField('//*[@id="input_3_2"]', '02/01/2014'); //Birthdate

        $I->click('//*[@id="choice_3_3_0"]'); //Sex/Gender: Male
        $I->fillField('//*[@id="input_3_4"]', '111 Test Street, Radford, VA 22221'); //Physical address
        $I->fillField('//*[@id="input_3_5"]', '113 Test Drive, Radford, VA 22222'); //Mailing address

        $I->fillField('//*[@id="input_3_6"]', 'N/A'); //Past programs
        $I->click('//*[@id="choice_3_7_1"]'); //Answer: No
        //...............................................................................//

        $I->amGoingTo('Submit 1st parent/guardian information');

        $I->fillField('//*[@id="input_3_13_3"]', 'John'); //Parent's first name
        $I->fillField('//*[@id="input_3_13_6"]', 'Doe'); //Parent's last name

        $I->fillField('//*[@id="input_3_15"]', 'Father'); //Relationship to child
        $I->fillField('//*[@id="input_3_16"]', '01/01/1980'); //Parent birthdate
        $I->selectOption('#choice_3_17_0', 'Yes'); //Answer: Yes

        $I->fillField('//*[@id="input_3_18"]', 'Someone'); //Employer
        $I->fillField('//*[@id="input_3_19"]', '40'); //Hours worked per week
        $I->fillField('//*[@id="input_3_20"]', '(111) 122-2222'); //Work Phone number

        $I->fillField('//*[@id="input_3_21"]', '(111) 122-2223'); //Home Phone number
        $I->fillField('//*[@id="input_3_22"]', 'johndoe@mail.com'); //Email

        //...............................................................................//

        $I->amGoingTo('Submit 2nd parent/guardian information');

        $I->fillField('//*[@id="input_3_24_3"]', 'Jane'); //Parent's first name
        $I->fillField('//*[@id="input_3_24_6"]', 'Doe'); //Parent's last name

        $I->fillField('//*[@id="input_3_26"]', 'Mother'); //Relationship to child
        $I->fillField('//*[@id="input_3_27"]', '01/01/1984'); //Parent birthdate
        $I->selectOption('#choice_3_28_0', 'Yes'); //Answer: Yes

        $I->fillField('//*[@id="input_3_29"]', 'Someone Else'); //Employer
        $I->fillField('//*[@id="input_3_30"]', '40'); //Hours worked per week
        $I->fillField('//*[@id="input_3_31"]', '(111) 133-2222'); //Work Phone number

        $I->fillField('//*[@id="input_3_32"]', '(111) 333-2222'); //Home Phone number
        $I->fillField('//*[@id="input_3_33"]', 'janedoe@mail.com'); //Email

        //...............................................................................//

        $I->amGoingTo('Submit medical information');

        $I->selectOption('#choice_3_35_0', 'Yes'); //Answer: Yes
        $I->checkOption('#choice_3_36_3'); //Answer: Medicaid

        $I->fillField('//*[@id="input_3_37"]', '01/01/2021'); //Last physical exam
        $I->fillField('//*[@id="input_3_38"]', '01/01/2021'); //Last dental checkup
        $I->selectOption('#choice_3_39_0', 'yes'); //Answer: Yes
        

        //...............................................................................//

        $I->amGoingTo('Submit program information');

        $I->click('//*[@id="input_3_53_1"]'); //Button: I agree

        $I->selectOption('#input_3_42', 'Head Start full day school day located at 1st Baptist for 3-year olds'); //Answer: 1st choice
        $I->selectOption('#input_3_96', 'Radford City Public Schools Virginia Preschool Initiative (VPI)'); //Answer: 3rd choice
        $I->checkOption('#input_3_53_1', 'I agree'); //Answer: Yes

        $I->fillField('//*[@id="input_3_54"]', '02/02/2022'); //Agreement date

        //...............................................................................//

        $I->amGoingTo('Submit additional family information');
        
        $I->checkOption('#choice_3_60_1'); //Answer: Developmental Delay
        $I->selectOption('#choice_3_68_1', 'No'); //Answer: No
        $I->selectOption('#choice_3_73_1', 'No'); //Answer: No
        $I->selectOption('#choice_3_73_1', 'No'); //Answer: No

        $I->selectOption('#input_3_77', 'English'); //Answer: Yes

        //...............................................................................//

        $I->amGoingTo('Submit education information');

        $I->selectOption('#choice_3_106_3', "Has College Degree (Bachelor’s or above)"); //Answer: Parent 1 has college degree
        $I->selectOption('#choice_3_108_2', 'Some College/Associate’s Degree/ Other Training'); //Answer: Parent 2 has some training/college
        $I->selectOption('#choice_3_113_2', 'Work 30+ hours a week'); //Answer: Parent 1 works 30+ hours
        $I->selectOption('#choice_3_117_0', 'Not employed'); //Answer: Parent 2 is unemployed


        $I->checkOption('#choice_3_80_1', 'Housing/Rental Assistance'); //Answer: Rental assistance
        $I->selectOption('#choice_3_82_0', 'Yes'); //Answer: Yes available to transport
        

        $I->fillField('//*[@id="input_3_89"]', '80000'); //Income: 80000
        $I->fillField('//*[@id="input_3_90"]', 'Friend'); //Answer: friend
        
        $I->click('//*[@id="gform_submit_button_3"]'); //Submit form

        


        //
        //$I->amOnPage('/financeassistformtest');
        $I->see('Thank you');

    }



    //Testing if Parent/Guardian 1 field isn't filled out
    public function FinancialAssistPageTest2(AcceptanceTester $I) {
        $I->amOnPage('/financeassistformtest'); //go to form preview page
        $I->amGoingTo('submit financial assistance app form with test values'); //comment to state intention

        //...............................................................................//
        $I->amGoingTo('Submit childs information');
        $I->fillField('//*[@id="input_3_1_3"]', 'Jim'); //Child's first name
        $I->fillField('//*[@id="input_3_1_6"]', 'Doe'); //Child's last name
        $I->fillField('//*[@id="input_3_2"]', '02/01/2014'); //Birthdate

        $I->click('//*[@id="choice_3_3_0"]'); //Sex/Gender: Male
        $I->fillField('//*[@id="input_3_4"]', '111 Test Street, Radford, VA 22221'); //Physical address
        $I->fillField('//*[@id="input_3_5"]', '113 Test Drive, Radford, VA 22222'); //Mailing address

        $I->fillField('//*[@id="input_3_6"]', 'N/A'); //Past programs
        $I->click('//*[@id="choice_3_7_1"]'); //Answer: No
        //...............................................................................//


        //...............................................................................//

        $I->amGoingTo('Submit 2nd parent/guardian information');

        $I->fillField('//*[@id="input_3_24_3"]', 'Jane'); //Parent's first name
        $I->fillField('//*[@id="input_3_24_6"]', 'Doe'); //Parent's last name

        $I->fillField('//*[@id="input_3_26"]', 'Mother'); //Relationship to child
        $I->fillField('//*[@id="input_3_27"]', '01/01/1984'); //Parent birthdate
        $I->selectOption('#choice_3_28_0', 'Yes'); //Answer: Yes

        $I->fillField('//*[@id="input_3_29"]', 'Someone Else'); //Employer
        $I->fillField('//*[@id="input_3_30"]', '40'); //Hours worked per week
        $I->fillField('//*[@id="input_3_31"]', '(111) 133-2222'); //Work Phone number

        $I->fillField('//*[@id="input_3_32"]', '(111) 333-2222'); //Home Phone number
        $I->fillField('//*[@id="input_3_33"]', 'janedoe@mail.com'); //Email

        //...............................................................................//

        $I->amGoingTo('Submit medical information');

        $I->selectOption('#choice_3_35_0', 'Yes'); //Answer: Yes
        $I->checkOption('#choice_3_36_3'); //Answer: Medicaid

        $I->fillField('//*[@id="input_3_37"]', '01/01/2021'); //Last physical exam
        $I->fillField('//*[@id="input_3_38"]', '01/01/2021'); //Last dental checkup
        $I->selectOption('#choice_3_39_0', 'yes'); //Answer: Yes
        

        //...............................................................................//

        $I->amGoingTo('Submit program information');

        $I->click('//*[@id="input_3_53_1"]'); //Button: I agree

        $I->selectOption('#input_3_42', 'Head Start full day school day located at 1st Baptist for 3-year olds'); //Answer: 1st choice
        $I->selectOption('#input_3_96', 'Radford City Public Schools Virginia Preschool Initiative (VPI)'); //Answer: 3rd choice
        $I->checkOption('#input_3_53_1', 'I agree'); //Answer: Yes

        $I->fillField('//*[@id="input_3_54"]', '02/02/2022'); //Agreement date

        //...............................................................................//

        $I->amGoingTo('Submit additional family information');
        
        $I->checkOption('#choice_3_60_1'); //Answer: Developmental Delay
        $I->selectOption('#choice_3_68_1', 'No'); //Answer: No
        $I->selectOption('#choice_3_73_1', 'No'); //Answer: No
        $I->selectOption('#choice_3_73_1', 'No'); //Answer: No

        $I->selectOption('#input_3_77', 'English'); //Answer: Yes

        //...............................................................................//

        $I->amGoingTo('Submit education information');


        $I->selectOption('#choice_3_108_2', 'Some College/Associate’s Degree/ Other Training'); //Answer: Parent 2 has some training/college

        $I->selectOption('#choice_3_117_0', 'Not employed'); //Answer: Parent 2 is unemployed


        $I->checkOption('#choice_3_80_1', 'Housing/Rental Assistance'); //Answer: Rental assistance
        $I->selectOption('#choice_3_82_0', 'Yes'); //Answer: Yes available to transport
        

        $I->fillField('//*[@id="input_3_89"]', '80000'); //Income: 80000
        $I->fillField('//*[@id="input_3_90"]', 'Friend'); //Answer: friend
        
        $I->click('//*[@id="gform_submit_button_3"]'); //Submit form

        


        //
        //$I->amOnPage('/financeassistformtest');
        $I->see('THERE WAS A PROBLEM WITH YOUR SUBMISSION');

    }




    //testing if only minimum number of fields are filled out
    public function FinancialAssistPageTest3(AcceptanceTester $I) {
        $I->amOnPage('/financeassistformtest'); //go to form preview page
        $I->amGoingTo('submit financial assistance app form with test values'); //comment to state intention

        //...............................................................................//
        $I->amGoingTo('Submit childs information');
        $I->fillField('//*[@id="input_3_1_3"]', 'Jim'); //Child's first name
        $I->fillField('//*[@id="input_3_1_6"]', 'Doe'); //Child's last name
        $I->fillField('//*[@id="input_3_2"]', '02/01/2014'); //Birthdate

        $I->fillField('//*[@id="input_3_4"]', '111 Test Street, Radford, VA 22221'); //Physical address
        //...............................................................................//

        $I->amGoingTo('Submit 1st parent/guardian information');

        $I->fillField('//*[@id="input_3_13_3"]', 'John'); //Parent's first name
        $I->fillField('//*[@id="input_3_13_6"]', 'Doe'); //Parent's last name

        $I->fillField('//*[@id="input_3_15"]', 'Father'); //Relationship to child
        $I->fillField('//*[@id="input_3_16"]', '01/01/1980'); //Parent birthdate
        $I->selectOption('#choice_3_17_0', 'Yes'); //Answer: Yes

        $I->fillField('//*[@id="input_3_18"]', 'Someone'); //Employer
        $I->fillField('//*[@id="input_3_19"]', '40'); //Hours worked per week
        $I->fillField('//*[@id="input_3_20"]', '(111) 122-2222'); //Work Phone number

        $I->fillField('//*[@id="input_3_21"]', '(111) 122-2223'); //Home Phone number
        $I->fillField('//*[@id="input_3_22"]', 'johndoe@mail.com'); //Email

        //...............................................................................//


        //...............................................................................//
        

        //...............................................................................//


        //...............................................................................//


        //...............................................................................//

        
        $I->click('//*[@id="gform_submit_button_3"]'); //Submit form


        //
        //$I->amOnPage('/financeassistformtest');
        $I->see('Thank you');

    }

        //Testing when an invalid email is submitted
        public function FinancialAssistPageTest4(AcceptanceTester $I) {
            $I->amOnPage('/financeassistformtest'); //go to form preview page
            $I->amGoingTo('submit financial assistance app form with test values'); //comment to state intention
    
            //...............................................................................//
            $I->amGoingTo('Submit childs information');
            $I->fillField('//*[@id="input_3_1_3"]', 'Jim'); //Child's first name
            $I->fillField('//*[@id="input_3_1_6"]', 'Doe'); //Child's last name
            $I->fillField('//*[@id="input_3_2"]', '02/01/2014'); //Birthdate
    
            $I->click('//*[@id="choice_3_3_0"]'); //Sex/Gender: Male
            $I->fillField('//*[@id="input_3_4"]', '111 Test Street, Radford, VA 22221'); //Physical address
            $I->fillField('//*[@id="input_3_5"]', '113 Test Drive, Radford, VA 22222'); //Mailing address
    
            $I->fillField('//*[@id="input_3_6"]', 'N/A'); //Past programs
            $I->click('//*[@id="choice_3_7_1"]'); //Answer: No
            //...............................................................................//
    
            $I->amGoingTo('Submit 1st parent/guardian information');
    
            $I->fillField('//*[@id="input_3_13_3"]', 'John'); //Parent's first name
            $I->fillField('//*[@id="input_3_13_6"]', 'Doe'); //Parent's last name
    
            $I->fillField('//*[@id="input_3_15"]', 'Father'); //Relationship to child
            $I->fillField('//*[@id="input_3_16"]', '01/01/1980'); //Parent birthdate
            $I->selectOption('#choice_3_17_0', 'Yes'); //Answer: Yes
    
            $I->fillField('//*[@id="input_3_18"]', 'Someone'); //Employer
            $I->fillField('//*[@id="input_3_19"]', '40'); //Hours worked per week
            $I->fillField('//*[@id="input_3_20"]', '(111) 122-2222'); //Work Phone number
    
            $I->fillField('//*[@id="input_3_21"]', '(111) 122-2223'); //Home Phone number
            $I->fillField('//*[@id="input_3_22"]', 'johndoe'); //Email
    
            //...............................................................................//
    
            $I->amGoingTo('Submit 2nd parent/guardian information');
    
            $I->fillField('//*[@id="input_3_24_3"]', 'Jane'); //Parent's first name
            $I->fillField('//*[@id="input_3_24_6"]', 'Doe'); //Parent's last name
    
            $I->fillField('//*[@id="input_3_26"]', 'Mother'); //Relationship to child
            $I->fillField('//*[@id="input_3_27"]', '01/01/1984'); //Parent birthdate
            $I->selectOption('#choice_3_28_0', 'Yes'); //Answer: Yes
    
            $I->fillField('//*[@id="input_3_29"]', 'Someone Else'); //Employer
            $I->fillField('//*[@id="input_3_30"]', '40'); //Hours worked per week
            $I->fillField('//*[@id="input_3_31"]', '(111) 133-2222'); //Work Phone number
    
            $I->fillField('//*[@id="input_3_32"]', '(111) 333-2222'); //Home Phone number
            $I->fillField('//*[@id="input_3_33"]', 'janedoe@mail.com'); //Email
    
            //...............................................................................//
    
            $I->amGoingTo('Submit medical information');
    
            $I->selectOption('#choice_3_35_0', 'Yes'); //Answer: Yes
            $I->checkOption('#choice_3_36_3'); //Answer: Medicaid
    
            $I->fillField('//*[@id="input_3_37"]', '01/01/2021'); //Last physical exam
            $I->fillField('//*[@id="input_3_38"]', '01/01/2021'); //Last dental checkup
            $I->selectOption('#choice_3_39_0', 'yes'); //Answer: Yes
            
    
            //...............................................................................//
    
            $I->amGoingTo('Submit program information');
    
            $I->click('//*[@id="input_3_53_1"]'); //Button: I agree
    
            $I->selectOption('#input_3_42', 'Head Start full day school day located at 1st Baptist for 3-year olds'); //Answer: 1st choice
            $I->selectOption('#input_3_96', 'Radford City Public Schools Virginia Preschool Initiative (VPI)'); //Answer: 3rd choice
            $I->checkOption('#input_3_53_1', 'I agree'); //Answer: Yes
    
            $I->fillField('//*[@id="input_3_54"]', '02/02/2022'); //Agreement date
    
            //...............................................................................//
    
            $I->amGoingTo('Submit additional family information');
            
            $I->checkOption('#choice_3_60_1'); //Answer: Developmental Delay
            $I->selectOption('#choice_3_68_1', 'No'); //Answer: No
            $I->selectOption('#choice_3_73_1', 'No'); //Answer: No
            $I->selectOption('#choice_3_73_1', 'No'); //Answer: No
    
            $I->selectOption('#input_3_77', 'English'); //Answer: Yes
    
            //...............................................................................//
    
            $I->amGoingTo('Submit education information');
    
            $I->selectOption('#choice_3_106_3', "Has College Degree (Bachelor’s or above)"); //Answer: Parent 1 has college degree
            $I->selectOption('#choice_3_108_2', 'Some College/Associate’s Degree/ Other Training'); //Answer: Parent 2 has some training/college
            $I->selectOption('#choice_3_113_2', 'Work 30+ hours a week'); //Answer: Parent 1 works 30+ hours
            $I->selectOption('#choice_3_117_0', 'Not employed'); //Answer: Parent 2 is unemployed
    
    
            $I->checkOption('#choice_3_80_1', 'Housing/Rental Assistance'); //Answer: Rental assistance
            $I->selectOption('#choice_3_82_0', 'Yes'); //Answer: Yes available to transport
            
    
            $I->fillField('//*[@id="input_3_89"]', '80000'); //Income: 80000
            $I->fillField('//*[@id="input_3_90"]', 'Friend'); //Answer: friend
            
            $I->click('//*[@id="gform_submit_button_3"]'); //Submit form
    
    
            //
            //$I->amOnPage('/financeassistformtest');
            $I->see('THERE WAS A PROBLEM WITH YOUR SUBMISSION');
    
        }


            //testing if invalid phone is submitted
    public function FinancialAssistPageTest5(AcceptanceTester $I) {
        $I->amOnPage('/financeassistformtest'); //go to form preview page
        $I->amGoingTo('submit financial assistance app form with test values'); //comment to state intention

        //...............................................................................//
        $I->amGoingTo('Submit childs information');
        $I->fillField('//*[@id="input_3_1_3"]', 'Jim'); //Child's first name
        $I->fillField('//*[@id="input_3_1_6"]', 'Doe'); //Child's last name
        $I->fillField('//*[@id="input_3_2"]', '02/01/2014'); //Birthdate

        $I->fillField('//*[@id="input_3_4"]', '111 Test Street, Radford, VA 22221'); //Physical address
        //...............................................................................//

        $I->amGoingTo('Submit 1st parent/guardian information');

        $I->fillField('//*[@id="input_3_13_3"]', 'John'); //Parent's first name
        $I->fillField('//*[@id="input_3_13_6"]', 'Doe'); //Parent's last name

        $I->fillField('//*[@id="input_3_15"]', 'Father'); //Relationship to child
        $I->fillField('//*[@id="input_3_16"]', '01/01/1980'); //Parent birthdate
        $I->selectOption('#choice_3_17_0', 'Yes'); //Answer: Yes

        $I->fillField('//*[@id="input_3_18"]', 'Someone'); //Employer
        $I->fillField('//*[@id="input_3_19"]', '40'); //Hours worked per week
        $I->fillField('//*[@id="input_3_20"]', '(1) 1-222'); //Work Phone number

        $I->fillField('//*[@id="input_3_21"]', '(111) 122-2223'); //Home Phone number
        $I->fillField('//*[@id="input_3_22"]', 'johndoe@mail.com'); //Email

        //...............................................................................//


        //...............................................................................//
        

        //...............................................................................//


        //...............................................................................//


        //...............................................................................//

        
        $I->click('//*[@id="gform_submit_button_3"]'); //Submit form


        //
        //$I->amOnPage('/financeassistformtest');
        $I->see('THERE WAS A PROBLEM WITH YOUR SUBMISSION');

    }



}