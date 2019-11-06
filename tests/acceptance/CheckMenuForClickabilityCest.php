<?php 

class CheckMenuForClickabilityCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('button.rc-menu-toggle');
    }

    // tests
    public function login(AcceptanceTester $I)
    {
        $I->click('Login');
        $I->see('If you have an account, sign in with');
    }
    public function register(AcceptanceTester $I)
    {
        $I->click('Register');
        $I->see('Please add me to the Rockay
 newsletter list to receive the latest product launches and online exclusives.
 Rockay does not share or sell personal info. ');
    }
    public function ourMission(AcceptanceTester $I)
    {
        $I->click('Our Mission');
        $I->see('Our mission', 'h1');
    }
    public function blog(AcceptanceTester $I)
    {
        $I->click('Blog');
        $I->see('Blog', 'h1');
    }
    public function ourAthletes(AcceptanceTester $I)
    {
        $I->click('Our Athletes');
        $I->see('Our Athletes', 'h1');
    }
    public function contactUs(AcceptanceTester $I)
    {
        $I->click('Contact us');
        $I->see('Contact us', 'h1');
    }
    public function About(AcceptanceTester $I)
    {
        $I->click('About');
        $I->see('FAQs');
        $I->click('FAQs');
        $I->see('FAQs', 'h1');
    }
}
