FROM 	alpine:3.12

RUN 	apk update
RUN		apk add influxdb

EXPOSE 	8086

CMD 	influxd run -config /etc/influxdb.conf