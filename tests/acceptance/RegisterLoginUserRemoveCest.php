<?php

class RegisterLoginUserRemoveCest
{
    private $email = 'grg-test@mail.com';
    private $password = '3MJL*uJmE7f0@F&1VxaWK5EH';
    private $loginMassage = 'If you have an account, sign in with';

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function registerUserSuccessfully(AcceptanceTester $I)
    {
        $email = $this->email;
        $password = $this->password;
        $loginMassage = $this->loginMassage;

        $I->amOnPage('/my-account/?register');
        $I->fillField('billing_first_name', 'grg-test-first-name');
        $I->fillField('#form-l-name', 'grg-test-last-name');
        $I->fillField('email', $email);
        $I->fillField('.form-control.woocommerce-Input.woocommerce-Input--text.input-text.js-validation.js-validation-password.register-password-input', $password);
        $I->click('#register-tab > form > div.form-group.form-group-center > button');
        $I->wait(1);
        $I->see($email, '.logged-in-nomination');
        $I->click('button.rc-menu-toggle');
        $I->click('a.logout');
        $I->wait(1);
        $I->see($loginMassage, '.rc-register-subtitle');
    }

    public function loginSuccessfully(AcceptanceTester $I)
    {
        $email = $this->email;
        $password = $this->password;
        $loginMassage = $this->loginMassage;

        $I->amOnPage('/my-account/');
        $I->see($loginMassage);
        $I->fillField('username', $email);
        $I->fillField('password', $password);
        $I->click('Continue With Account');
        $I->see($email, '.logged-in-nomination');
    }

    public function removeUser(AcceptanceTester $I){
        $I->amOnPage('/?grg-auto-test=26a3d414-d396-4d18-a0c2-9aee14bc6612&rm-test-user=grg-test@mail.com');
        $I->see('WP User Deleted', 'h1');
    }
}
