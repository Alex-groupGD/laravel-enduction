
## Запуск склонированного приложения 

1. Для начала необходимо создать файл .env и поместить в него содержимое файла .env.example
2. Установим зависимости приложения:
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
3.  Настроим псевдоним оболочки, команда:
```bash
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
4. Чтобы запустить все контейнеры Docker в фоновом режиме, вы можете запустить Sail в «отключенном» режиме:
```bash
sail up -d
```
5. Чтобы остановить все контейнер воспользуйтесь командой:
```bash
sail stop
```
