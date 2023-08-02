# Brain Games

## О проекте
&laquo;Игры разума&raquo;&nbsp;&mdash; это набор консольных игр, написанных на&nbsp;языке PHP в&nbsp;качестве учебного проекта. Игры предназначены для проверки навыков устного счета и&nbsp;математических способностей.

## Статусы автотестов Hexlet и Code Climate:
[![Actions Status](https://github.com/sokoloff-rv/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/sokoloff-rv/php-project-lvl1/actions)

[![Maintainability](https://api.codeclimate.com/v1/badges/0344a74abb4a867ac0dc/maintainability)](https://codeclimate.com/github/sokoloff-rv/php-project-lvl1/maintainability)

## Начало работы

Чтобы развернуть проект локально, выполните последовательно несколько действий:

1. Клонируйте репозиторий:
    
    ```bash
    git clone git clone https://github.com/sokoloff-rv/php-project-lvl1.git braingames
    ```
    
2. Перейдите в директорию проекта:
    
    ```bash
    cd braingames
    ```
    
3. Установите зависимости:
    
    ```bash
    make install
    ```
    
4. Установите права на выполнение файлов в директории `bin`:
    
    ```bash
    chmod +x ./bin/*
    ```
    

## Запуск мини-игр

Для запуска игр выполните команды:

- `make brain-even` — запуск игры "Проверка на четность".
- `make brain-calc` — запуск игры "Калькулятор".
- `make brain-gcd` — запуск игры "Наибольший общий делитель".
- `make brain-progression` — запуск игры "Арифметическая прогрессия".
- `make brain-prime` — запуск игры "Простое ли число?".

## Демонстрации мини-игр

### Игра на определение четного числа:
[![asciicast](https://asciinema.org/a/597199.svg)](https://asciinema.org/a/597199)

### Игра-калькулятор:
[![asciicast](https://asciinema.org/a/597201.svg)](https://asciinema.org/a/597201)

### Игра на поиск НОД:
[![asciicast](https://asciinema.org/a/597206.svg)](https://asciinema.org/a/597206)

### Игра на поиск пропущенного члена прогрессии:
[![asciicast](https://asciinema.org/a/597338.svg)](https://asciinema.org/a/597338)

### Игра на определение простого числа:
[![asciicast](https://asciinema.org/a/597340.svg)](https://asciinema.org/a/597340)
