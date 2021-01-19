FROM alpine:3.12

RUN apk update && apk add openrc 

WORKDIR /srcs

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY setup.sh .

RUN chmod 711 /tmp/setup.sh
RUN apk add vsftpd && \
        apk add openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048		\
	-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=ndeana'	\
	-keyout /etc/ssl/private/vsftpd.key						\
	-out /etc/ssl/certs/vsftpd.crt
RUN adduser -D -h /var/ftp ndeana; echo "ndeana:admin" | chpasswd
RUN mkdir -p /var/ftp

EXPOSE 20 21 30000

CMD sh /tmp/setup.sh