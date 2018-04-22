up:
	docker-compose up -d
d:
	docker-compose down
s:
	docker-compose stop
php:
	docker exec -it php-zend-exam bash
phpcs:
	vendor/bin/phpcs --standard=PSR2 ./www/src ./www/functions ./www/language-reference ./www/include_path
phpcs-fix:
	vendor/bin/php-cs-fixer fix ./www/src --rules=@PSR2 && vendor/bin/php-cs-fixer fix ./www/functions --rules=@PSR2 && vendor/bin/php-cs-fixer fix  ./www/language-reference --rules=@PSR2 &&  vendor/bin/php-cs-fixer fix  ./www/include_path --rules=@PSR2