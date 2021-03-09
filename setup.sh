minikube delete
minikube start --vm-driver=virtualbox
minikube addons enable metallb

# kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f srcs/yamls/metallb.yaml

eval $(minikube docker-env)

kubectl apply -f srcs/yamls/serviceaccount.yaml
printf "\n\033[35m============= BUILD DOCKER - NGINX =============\033[0m\n"
docker build -t nginx		srcs/nginx/
kubectl apply -f srcs/yamls/nginx.yaml
printf "\n\033[35m============= BUILD DOCKER - FTPS =============\033[0m\n"
docker build -t ftps		srcs/ftps/
kubectl apply -f srcs/yamls/ftps.yaml
printf "\n\033[35m============= BUILD DOCKER - MYSQL =============\033[0m\n"
docker build -t mysql		srcs/mysql/
kubectl apply -f srcs/yamls/mysql.yaml
printf "\n\033[35m============= BUILD DOCKER - PHPMYADMIN =============\033[0m\n"
docker build -t phpmyadmin	srcs/phpmyadmin/
kubectl apply -f srcs/yamls/phpmyadmin.yaml
printf "\n\033[35m============= BUILD DOCKER - WORDPRESS =============\033[0m\n"
docker build -t wordpress	srcs/wordpress/
kubectl apply -f srcs/yamls/wordpress.yaml
printf "\n\033[35m============= BUILD DOCKER - GRAFANA =============\033[0m\n"
docker build -t grafana		srcs/grafana/
kubectl apply -f srcs/yamls/grafana.yaml
printf "\n\033[35m============= BUILD DOCKER - INFLUXDB =============\033[0m\n"
docker build -t influxdb	srcs/influxdb/
kubectl apply -f srcs/yamls/influxdb.yaml
printf "\n\033[35m============= BUILD DOCKER - TELEGRAF =============\033[0m\n"
docker build -t telegraf	srcs/telegraf/
kubectl apply -f srcs/yamls/telegraf.yaml

printf "\n\033[35m============= RUNING DASHBOARD =============\033[0m\n"
minikube dashboard

# wordpress		ndeana:ft_services
# phpmyadmin	mysql:ft_services
# FTPS			ndeana:ft_services
# grafana 		admin:admin