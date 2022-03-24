<?php

//to run: php vendor/bin/codecept run tests/acceptance/BlogPageCest.php --steps
class WhoWeArePageCest
{
    public function whoWeArePageWorks(AcceptanceTester $I){
        //going to 'who we are' page
        $I->amOnPage('/who-we-are');

        $I->amGoingTo('look at every heading element on this page'); //comment to state intention
        //$I->see('Our Story', 'h3');
        $I->see('Our Mission', 'h4');
        //$I->see('Our Goals', 'h4');   
    }
}