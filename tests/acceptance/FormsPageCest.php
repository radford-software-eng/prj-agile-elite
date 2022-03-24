<?php

//to run: php vendor/bin/codecept run tests/acceptance/FormsPageCest.php --steps
class FormsPageCest
{
    public function whoWeArePageWorks(AcceptanceTester $I){
        //going to 'forms' page
        $I->amOnPage('/forms');

        $I->amGoingTo('look at make sure every form button leads to the correct form'); //comment to state intention
        $I->see('Forms', 'h3'); 
        //clicking financial assistance form button
        $I->click('//*[@id="post-3602"]/div/div/section[3]/div/div/div/section[1]/div/div[1]/div/div/div/div/a/span/span');
        $I->amOnPage('/financial-assistance-application');
        $I->seeCurrentUrlEquals('/financial-assistance-application');
        $I->amOnPage('/forms');
        //clicking financial assistance pdf form button
        $I->click('//*[@id="post-3602"]/div/div/section[3]/div/div/div/section[1]/div/div[2]/div/div/div/div/a/span/span');
        $I->amOnPage('/wp-content/uploads/2021/11/Mixed_Delivery_Grant_Application.pdf');
        $I->seeCurrentUrlEquals('/wp-content/uploads/2021/11/Mixed_Delivery_Grant_Application.pdf');
        $I->amOnPage('/forms');
        //clicking delivery grant letter button
        $I->click('//*[@id="post-3602"]/div/div/section[3]/div/div/div/section[2]/div/div[1]/div/div/div/div/a/span/span');
        $I->amOnPage('/wp-content/uploads/2022/02/Mixed_Delivery_Grant_Letter_2021_2022.pdf');
        $I->seeCurrentUrlEquals('/wp-content/uploads/2022/02/Mixed_Delivery_Grant_Letter_2021_2022.pdf');
        $I->amOnPage('/forms');
        //clicking grant eligibility form button
        $I->click('//*[@id="post-3602"]/div/div/section[3]/div/div/div/section[2]/div/div[2]/div/div/div/div/a/span/span');
        $I->amOnPage('/wp-content/uploads/2022/02/Mixed_Delivery_Eligibility_Form_2021_2022.pdf');
        $I->seeCurrentUrlEquals('/wp-content/uploads/2022/02/Mixed_Delivery_Eligibility_Form_2021_2022.pdf');
        $I->amOnPage('/forms');
    }
}