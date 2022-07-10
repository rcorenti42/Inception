FROM debian:buster

ARG SQL_DB
ARG SQL_ROOT
ARG SQL_PWD
ARG SQL_USR
ARG SQL_USR_PWD

EXPOSE 3306

RUN apt-get update && apt-get install -y \
    mariadb-server && \
    rm -rf /var/lib/apt/lists/*

RUN sed -i "s/pid-file\s*=.*/pid-file = \/var\/run\/mysqld\/mysqld.pid/g" /etc/mysql/mariadb.conf.d/50-server.cnf
RUN sed -i "s/socket\s*=.*/socket = \/var\/run\/mysqld\/mysqld.sock/g" /etc/mysql/mariadb.conf.d/50-server.cnf
RUN sed -i "s/bind-address\s*=.*//g" /etc/mysql/mariadb.conf.d/50-server.cnf

RUN mkdir /var/run/mysqld/

RUN chmod 777 \
    /var/lib/mysql \
    /run/mysqld

RUN echo "flush privileges;" > config.sql
RUN echo "create database $SQL_DB;" >> config.sql
RUN echo "grant all on $SQL_DB.* to '$SQL_USR'@'%' identified by '$SQL_USR_PWD';" >> config.sql
RUN echo "grant all on *.* to '$SQL_ROOT'@'%' identified by '$SQL_PWD' with grant option;" >> config.sql
RUN echo "grant all on *.* to $SQL_ROOT@localhost identified by '$SQL_PWD' with grant option;" >> config.sql
RUN chmod 755 config.sql
RUN mysqld --bootstrap < config.sql

ENTRYPOINT ["mysqld"]