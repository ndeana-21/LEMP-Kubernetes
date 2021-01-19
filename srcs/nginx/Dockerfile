FROM alpine:3.12

RUN apk update
RUN apk add --no-cache nginx openssl openssh openrc supervisor

RUN mkdir www

COPY setup.sh /tmp
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY index.html /www/
COPY certificate.key /var/
COPY certificate.pem /var/
COPY supervisord.conf /etc/supervisord.conf

EXPOSE 22 80 443

RUN chmod 711 /tmp/setup.sh

CMD sh /tmp/setup.sh