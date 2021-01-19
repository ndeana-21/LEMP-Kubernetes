FROM alpine:3.12

COPY setup.sh /tmp
COPY telegraf.conf /etc/telegraf/telegraf.conf

RUN apk update && apk add openrc
RUN apk add --no-cache --upgrade bash \
	&& apk add --no-cache --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat
RUN apk add telegraf --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ --allow-untrusted

RUN wget https://dl.grafana.com/oss/release/grafana-7.2.2.linux-amd64.tar.gz
RUN tar -xzvf grafana-7.2.2.linux-amd64.tar.gz
RUN mv grafana-6.7.3 grafana
RUN rm -rf grafana-6.7.3.linux-amd64.tar.gz

EXPOSE 3000
RUN chmod 755 /tmp/setup.sh

CMD sh /tmp/setup.sh