install:
	composer install

validate:
	composer validate

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin
