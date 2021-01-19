FROM alpine:3.12

COPY createdb.sql ndeana.sql ./
COPY setup.sh /tmp
COPY mysql.cnf /etc/mysql/my.cnf

RUN apk update && apk add openrc
RUN apk add --no-cache mysql mysql-client
RUN mkdir "/run/mysqld"
RUN chown -R mysql /run/mysqld

EXPOSE 3306

RUN chown 755 /tmp/setup.sh

CMD sh /tmp/setup.sh