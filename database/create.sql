create database cliente;

create user clienteuser@localhost identified with mysql_native_password by 'cliente-bd';

grant all on cliente.* to clienteuser@localhost;

flush privileges;