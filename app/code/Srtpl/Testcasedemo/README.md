steps and reference:

install xdebug if not installed:

1) sudo apt-get install php-xdebug

2) php -m

3) sudo service nginx/apache2 restart, sudo service php7.1-fpm restart


4) Write php unit test case:

https://webkul.com/blog/create-custom-module-magento-2-unit-tests/

5) Generate php code coverage:

https://magento.stackexchange.com/questions/136685/phpunit-code-coverage

vendor/bin/phpunit -c dev/tests/unit/phpunit.xml --coverage-html ./report(dir name where code coverage report will store) app/code/Testcasedemo/HelloUnitTestC