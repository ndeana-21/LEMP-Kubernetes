FROM 	alpine:3.12

RUN 	apk update
RUN 	apk upgrade
RUN 	apk add vsftpd jq openssl

RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt -subj '/C=RU/ST=Moscow/L=Moscow/O=school21/CN=ft_services'
RUN 	mkdir -p /var/ftp

RUN		adduser -D -h /var/ftp ndeana
RUN		echo "ndeana:ft_services" | chpasswd

COPY 	vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY 	setup.sh ./

EXPOSE 	20 21 30000 30001 30002

CMD 	./setup.sh