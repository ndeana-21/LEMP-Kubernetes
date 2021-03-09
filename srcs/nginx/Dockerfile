FROM 	alpine:3.12

RUN 	apk update
RUN 	apk add nginx openssl openssh
RUN 	mkdir /var/run/nginx

RUN 	adduser -D -g 'www' www
RUN 	mkdir -p /www
RUN 	chown -R www:www /var/lib/nginx
RUN 	chown -R www:www /www

RUN 	adduser -D ndeana -h / && \
		echo "ndeana:ft_services" | chpasswd

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/user.key -out /etc/ssl/user.crt -subj '/C=RU/ST=Moscow/L=Moscow/O=school21/CN=ft_services'

COPY 	nginx.conf /etc/nginx/nginx.conf
COPY 	index.html /www/
COPY 	sshd_config /etc/ssh/sshd_config
COPY 	setup.sh ./

RUN 	chmod +x setup.sh

EXPOSE 	22 80 443

CMD 	./setup.sh