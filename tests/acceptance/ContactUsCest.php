<?php 

class ContactUsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/contact/');
        $I->see('Contact us','h1');
        $I->submitForm('#wpcf7-f243-o1 > form', [
            'first-name' => 'First Name Test',
            'last-name' => 'Last Name Test',
            'email' => 'Email@Test.com',
            'comment' => 'Test Comment',
        ]);
        $I->waitForElement('#wpcf7-f243-o1 > form > div.wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok','20');
        $I->see('Thank you for your message. It has been sent.','.wpcf7-mail-sent-ok');
    }
}
