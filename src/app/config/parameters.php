<?php

$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', getenv('MYSQL_DB_HOST'));
$container->setParameter('database_port', getenv('MYSQL_DB_PORT'));
$container->setParameter('database_name', getenv('MYSQL_INSTANCE_NAME'));
$container->setParameter('database_user', getenv('MYSQL_USERNAME'));
$container->setParameter('database_password', getenv('MYSQL_PASSWORD'));
$container->setParameter('database_charset', 'UTF8');
$container->setParameter('mailer_transport', 'smtp');
$container->setParameter('mailer_host', '127.0.0.1');
$container->setParameter('mailer_user', null);
$container->setParameter('mailer_password', null);
$container->setParameter('locale', 'zh');
$container->setParameter('secret', 'ThisTokenIsNotSoSecretChangeIt');
