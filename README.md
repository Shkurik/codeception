# codeception
Рассмотрел приемочные (Acceptance)функциональные (Functional) и юнит-тесты или модульные тесты (Unit-Tests).

1. Install
https://codeception.com/quickstart
Запустить команду:
composer require "codeception/codeception" --dev

Получим:
vendor - папка с выкачеными пакетами
composer.json - файлик с кодецепт
composer.lock - файлик с зависимостями их версиями
.gitignore - создать файлик

2. Setup
Запустить команду:
php vendor/bin/codecept bootstrap

Получим: 
tests - папку с тестами
codeception.yml - конфигурационный файл

3. Create Test
запустить команду
php vendor/bin/codecept generate:cest acceptance First

получим ответ
Test was created in /home/shkurik/www/codeception.loc/tests/acceptance/FirstCest.php

4. Configure Acceptance Tests
actor: AcceptanceTester
modules:
    enabled:
        - PhpBrowser:
            url: {YOUR APP'S URL}
        - \Helper\Acceptance
        

5. Write a Basic Test
<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home');  
    }
}

6. Run!
php vendor/bin/codecept run --steps