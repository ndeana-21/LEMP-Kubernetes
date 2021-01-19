#!bin/sh

rc default
mkdir /run/nginx
chmod 744 /run/nginx
/usr/bin/supervisor -c /etc/supervisor.conf