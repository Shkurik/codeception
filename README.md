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
Test was created in /tests/acceptance/FirstCest.php

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

------------
УСТАНОВКА SELENIUM В LINUX
1. УСТАНОВКА JAVA
sudo apt install openjdk-8-jre

2. УСТАНОВКА БРАУЗЕРОВ И ДРАЙВЕРОВ
sudo apt install firefox chromium-browser
wget https://chromedriver.storage.googleapis.com/76.0.3809.68/chromedriver_linux64.zip
sudo mv chromedriver /usr/local/bin/chromedriver
sudo chown root:root /usr/local/bin/chromedriver
sudo chmod +x /usr/local/bin/chromedriver
sudo mv geckodriver /usr/local/bin/geckodriver
sudo chown root:root /usr/local/bin/geckodriver
sudo chmod +x /usr/local/bin/geckodriver

3. УСТАНОВКА SELENIUM
wget https://selenium-release.storage.googleapis.com/3.141/selenium-server-standalone-3.141.59.jar
sudo chmod +x selenium-server-standalone-3.141.59.jar
java -jar selenium-server-standalone-3.141.59.jar