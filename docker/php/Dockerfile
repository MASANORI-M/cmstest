FROM amazonlinux:2023

ENV TZ=Asia/Tokyo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN yum -y update

# install php
RUN yum -y install php less php-intl \
    php-cli php-json php-common php-devel php-fpm \
    php-gd php-mysqlnd php-pdo php-xml

# install composer
RUN yum -y install unzip wget
WORKDIR /tmp
RUN wget https://getcomposer.org/installer -O composer-installer.php
RUN php composer-installer.php --filename=composer --install-dir=/usr/local/bin
RUN composer self-update

# install imagick
RUN yum -y install ImageMagick ImageMagick-devel
#RUN yum -y install php-pecl-imagick

# unix socket
RUN mkdir /var/run/php-fpm
VOLUME ["/var/run/php-fpm"]

RUN echo 'short_open_tag = On' >> /etc/php.ini
RUN echo 'date.timezone = Asia/Tokyo' >> /etc/php.ini
EXPOSE 9000

# run php-fpm in the foreground
ENTRYPOINT /usr/sbin/php-fpm -F

# nodeのインストール
RUN curl -fsSL https://rpm.nodesource.com/setup_18.x | bash -
RUN yum -y install nodejs

#コンテナログイン時のディレクトリ指定
WORKDIR /var/www/vhosts/cms