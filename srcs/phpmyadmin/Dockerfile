FROM alpine:3.12

RUN apk update
RUN apk add --no-cache php7 php7-fpm php7-opcache	\
			php7-gd php7-mysqli php7-zlib php7-curl	\
			php7-mbstring php7-json php7-session openrc

RUN mkdir -p /www/
RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages /www/phpmyadmin

COPY setup.sh /tmp
COPY config.inc.php /www/phpmyadmin/
COPY supervisor.conf /etc/supervisor.conf

EXPOSE 5000

RUN chmod 711 /tmp/setup.sh

CMD sh /tmp/setup.sh