My application "Startup for online shop for T-shirts system" for Laravel


IN ORDER TO START THE PROJECT 

I - Create a docker network:
docker network create laravel_t_shirts_network

II - You need to start the docker container by running the following command:
docker run --name laravel-t-shirts -d \
	-p 88:80 \
	-p 8822:22 \
	--restart unless-stopped \
	--volume /home/valentin/Internship_Development-Aid/My_Application/application/laravel-t-shirts:/var/www/html \
	--network=laravel_t_shirts_network \
	amoraresco/it-academy-project:latest \

III - You need to start the MariaDB docker by running the following command:
docker run --name laravel-t-shirts-db -d \
	-p 33066:3306 \
	-e MYSQL_ROOT_PASSWORD=root \
	--restart unless-stopped \
	--volume /home/valentin/Internship_Development-Aid/My_Application/application/laravel-t-shirts/docker-containers/db:/var/lib/mysql \
	--network=laravel_t_shirts_network \
	mariadb:latest \

IV - You need to start the MailHog container by running the following command:
docker run -d --name mailhog \
	-p 8025:8025 \
	--net laravel_t_shirts_network \
	--restart unless-stopped \
	--expose 8025 \
	mailhog/mailhog
