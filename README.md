### Скачать репозиторий
```bash
git clone https://github.com/webcoder-club/php-qa.git
```

### Установить PHP последней версии, в данном случае 7.2:
```bash
brew update
brew install php72
brew install composer
```

### Установить зависимости?
```bash
composer install
```

### Что я сделал для того, чтобы сохранить зависимости в composer.lock?
```bash
require --dev phpunit/phpunit ^6.5
```
