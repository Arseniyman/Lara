 CREATE DATABASE IF NOT EXISTS sandbox;
 USE sandbox;
 CREATE TABLE IF NOT EXISTS goods(
     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(255) NULL,
     description TEXT NULL,
     photo varchar(255) NULL,
     price double NULL
 );

INSERT INTO goods(name, description, photo, price)
VALUES ('Ручка ксиоми', 'Лучший рука писать красиво долгий держать', 
    'https://ae01.alicdn.com/kf/HTB1AZwXXI_vK1Rjy0Foq6xIxVXa2/Original-Xiaomi-Mijia-0-5mm-Point-Sign-Pen-Smooth-Switzerland-Refill-Pen-Japan-Black-Blue-Ink.jpg',
    '390'),
    ('Спинер', 'Красивый уникально металл спинер бесконечное вращение', 
    'https://avatars.mds.yandex.net/get-pdb/2332798/99f9136a-7d87-4ff0-ac56-5d94d5874ba2/s1200',
    '250'),
    ('Переносная зарядка', '70000 мач батарея с солнцем зарядка универсальный айфон самсунг',
    'https://images.ru.prom.st/650442155_w640_h640_solar-power-bank.jpg',
    '1000'),
    ('Чесалка для головы', 'Успокоение ручная массаж головы для всех',
    'https://www.apteka-kmv.ru/wa-data/public/shop/products/12/24/412412/images/79658/79658.745.jpg',
    '800'),
    ('Кроссовки', 'Спортивный мода кроссовки крепкий нога',
    'https://smartshopper.ru/img/aHR0cHM6Ly9jZG4xLm96b25lLnJ1L211bHRpbWVkaWEvMTAzMTk5NTAyMC5qcGc=.jpg',
    '900'),
    ('Очки', 'Солнечный анти очки с глаз рисунок',
    'https://rostov.podarkix.ru/yii2images/images/image-by-item-and-alias?item=Product5762&dirtyAlias=4bed2cf9db-1.jpg',
    '500');