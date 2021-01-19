FROM alpine:3.12

RUN apk update
RUN apk add --no-cache nginx supervisor \
		php7 php7-fpm php7-mysqli \ 
		php7-zlib php7-curl php7-mbstring \
		php7-json php7-session

RUN mkdir www
RUN wget https://wordpress.org/latest.zip
RUN unzip latest.zip
RUN mv wordpress /www/
RUN rm latest.zip

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY supervisor.conf /etc/supervisor.conf
COPY wp-config.php /www/
COPY setup.sh /tmp/
RUN chmod 711 /tmp/setup.sh

EXPOSE 5050

CMD sh /tmp/setup.sh