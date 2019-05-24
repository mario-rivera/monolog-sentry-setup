## Install Composer Packages

```bash
$ docker-compose \
-f ./docker/compose/bootstrap.yml \
--project-directory $(pwd) \
run --rm --no-deps --user $(id -u):$(id -g) \
composer
```

## Run PHP Console

```bash
$ docker-compose run --rm \
php
```

#### Require a composer package

```bash
$ docker-compose \
-f ./docker/compose/bootstrap.yml \
--project-directory $(pwd) \
run --rm --no-deps --user $(id -u):$(id -g) \
composer composer require -n --ignore-platform-reqs --no-scripts \
{packagename}:{packageversion}
```

#### Update composer packages

```bash
$ docker-compose \
-f ./docker/compose/bootstrap.yml \
--project-directory $(pwd) \
run --rm --no-deps --user $(id -u):$(id -g) \
composer composer update -n --ignore-platform-reqs --no-scripts
```