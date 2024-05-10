#/bin/bash

set -e

default_version="3"
version=${1:-"$default_version"}


docker build -t ichiky/dnsserv:"$version" dns 
docker tag ichiky/dnsserv:"$version" ichiky/dnsserv:latest

docker build -t ichiky/webserv:"$version" web
docker tag ichiky/webserv:"$version" ichiky/webserv:latest

docker build -t ichiky/phpserv:"$version" web/php
docker tag ichiky/phpserv:"$version" ichiky/phpserv:latest

docker build -t ichiky/mailserv:"$version" database/slave
docker tag ichiky/mailserv:"$version" ichiky/mailserv:latest



# avec le "set -e" du début, je suis assuré que rien ne sera pushé si un seul build ne c'est pas bien passé

docker push ichiky/dnsserv:"$version"
docker push ichiky/dnsserv:latest

docker push ichiky/webserv:"$version"
docker push ichiky/webserv:latest

docker push ichiky/phpserv:"$version"
docker push ichiky/phpserv:latest

docker push ichiky/mailserv:"$version"
docker push ichiky/mailserv:latest
