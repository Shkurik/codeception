<?php 

class ShopCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function addToCard(AcceptanceTester $I)
    {
        $I->amOnPage('/shop/');
        $I->click('Accelerate Running Socks');
        $I->see('Accelerate Running Socks','h1');
        $I->click('#pa_sizes > li:nth-child(1) > label');
        $I->click('.rc-qty-plus');
        $I->click('.single_add_to_cart_button');
        $price = str_replace('$', '', $I->grabTextFrom(".price .woocommerce-Price-amount")) * 1;
        $I->wait(2);
        $I->see('SUBTOTAL','span');
        $I->click('checkout');
        $total = str_replace('$', '', $I->grabTextFrom(".order-total .woocommerce-Price-amount")) * 1;
        if ($total < $price) {
            $I->customAssertion("Total price is invalid");
            $I->makeHtmlSnapshot();
        }
    }

//    public function freeCheckout(AcceptanceTester $I){
//        $this->addToCard($I);
//        $I->amOnPage('/');
//        zero-m9tmFA
//    }
}
