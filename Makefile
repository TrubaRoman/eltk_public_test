d-up:
	docker-compose up -d

d-down:
	docker-compose down

d-build:
	docker-compose up --build -d

d-app:
	 docker exec -it app /bin/bash
d-b:
	 docker exec -it db /bin/bash

test:
	docker exec app vendor/bin/phpunit --colors=always

asset-install:
	docker exec node yarn install

asset-dev:
	docker exec node yarn run dev

asset-watch:
	docker exec node yarn run watch

perm:
	sudo chown ${USER}:${USER} bootstrap/cache -R
	sudo chown ${USER}:${USER} storage -R
	if[ -d "node_modules"]; then sudo chown ${USER}:${USER} node_modules -R; fi
	if[ -d "public/build"]; then sudo chown ${USER}:${USER} public/build -R; fi