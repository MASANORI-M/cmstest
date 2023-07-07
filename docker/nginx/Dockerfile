FROM amazonlinux:2023

RUN yum -y update

# install nginx
RUN yum -y install nginx

# automatic start
ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]

#コンテナログイン時のディレクトリ指定
WORKDIR /var/www/vhosts/