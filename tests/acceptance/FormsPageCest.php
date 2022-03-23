<?php

//to run: php vendor/bin/codecept run tests/acceptance/FormsePageCest.php --steps
class FormsPageCest
{
    public function whoWeArePageWorks(AcceptanceTester $I){
        //going to 'forms' page
        $I->amOnPage('/forms');

        $I->amGoingTo('look at make sure every form button leads to the correct form'); //comment to state intention
        $I->see('Forms', 'h1'); 
        //clicking financial assistance form button
        $I->click('//*[@id="post-2838"]/div/div/div/section/div/div/div/section[1]/div/div[1]/div/div/div/div/a/span/span');
        $I->seeCurrentUrlEquals('/financial-assistance-application/');
        //clicking financial assistance pdf form button
        $I->click('//*[@id="post-2838"]/div/div/div/section/div/div/div/section[1]/div/div[1]/div/div/div/div/a/span/span');
        $I->seeCurrentUrlEquals('wp-content/uploads/2021/11/Mixed_Delivery_Grant_Application.pdf');
        //clicking delivery grant letter button
        $I->click('//*[@id="post-2838"]/div/div/div/section/div/div/div/section[2]/div/div[1]/div/div/div/div/a');
        $I->seeCurrentUrlEquals('wp-content/uploads/2022/02/Mixed_Delivery_Grant_Letter_2021_2022.pdf');
        //clicking grant eligibility form button
        $I->click('//*[@id="post-2838"]/div/div/div/section/div/div/div/section[2]/div/div[2]/div/div/div/div/a/span/span');
        $I->seeCurrentUrlEquals('wp-content/uploads/2022/02/Mixed_Delivery_Eligibility_Form_2021_2022.pdf');
    }
}