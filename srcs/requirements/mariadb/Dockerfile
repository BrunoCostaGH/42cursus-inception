FROM debian:bullseye

RUN apt update
RUN apt upgrade -y

# Install MariaDB
RUN apt install mariadb-server -y

COPY ./conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/mysql_setup.sh	/tmp/mysql_setup.sh
ENTRYPOINT [ "sh", "/tmp/mysql_setup.sh" ]