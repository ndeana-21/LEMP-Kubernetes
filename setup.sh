#!/bin/bash

minikube delete
minikube start --vm-driver=virtualbox

minikube addons enable metallb

minikube dashboard &
eval "$(minikube docker-env)"

docker build -t service_nginx		./srcs/nginx
docker build -t service_mysql		./srcs/mysql
docker build -t service_ftps		./srcs/ftps
docker build -t service_wordpress	./srcs/wordpress
docker build -t service_influxdb	./srcs/influxdb
docker build -t service_telegraf	./srcs/telegraf
docker build -t service_grafana		./srcs/grafana
docker build -t service_phpmyadmin	./srcs/phpmyadmin

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl apply -f srcs/yamls/metallb.yaml
kubectl apply -f srcs/yamls/nginx.yaml
kubectl apply -f srcs/yamls/mysql.yaml
kubectl apply -f srcs/yamls/phpmyadmin.yaml
kubectl apply -f srcs/yamls/wordpress.yaml
kubectl apply -f srcs/yamls/ftps.yaml
kubectl apply -f srcs/yamls/grafana.yaml
kubectl apply -f srcs/yamls/influxdb.yaml
