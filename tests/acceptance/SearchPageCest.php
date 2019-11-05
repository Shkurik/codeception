<?php 

class SearchPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('For RUNNERS By RUNNERS', 'h1');
        $I->click('#woocommerce-product-search-field-0');
        $I->submitForm("#header-search-form", [
            's' => 'Accelerate Running Socks',
        ]);
        $I->see('Search Results For: Accelerate Running Socks', 'h1');
    }
}
