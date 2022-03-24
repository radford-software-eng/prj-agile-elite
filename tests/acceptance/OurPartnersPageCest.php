<?php

//to run: php vendor/bin/codecept run tests/acceptance/OurPartnersPageCest.php --steps
class OurPartnersPageCest
{
    public function ourPartnersPageWorks(AcceptanceTester $I) {
        $I->amOnPage('/our-partners');

        $I->amGoingTo('click on every partner link to make sure it works'); //comment to state intention


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


        //testing Community Foundation of New River Valley link
        $I->amGoingTo('click the Community Foundation of New River Valley link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[1]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners'); //return to our-partners page


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

        //testing Kindercare
        $I->amGoingTo('click the Kindercare link');
        $I->click('//*[@id="post-7"]/div/div/div/section/div/div/div/section[7]/div/div[2]/div/div[1]/div/h3/a');
        $I->seeCurrentUrlEquals('/');
        $I->amOnPage('/our-partners');

        //testing R.O.C.K Club
        $I->amGoingTo('click the Rockclub link');
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
}