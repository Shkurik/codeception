<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
        $I->see('hello');
        $I->see('you are not bot', 'p');
    }
}
