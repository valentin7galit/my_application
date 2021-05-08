docker run --name laravel-t-shirts-db -d \
            -p 33066:3306 \
            -e MYSQL_ROOT_PASSWORD=root \
            --restart unless-stopped \
            --volume /home/valentin/Internship_Development-Aid/My_Application/application/laravel-t-shirts/docker-containers/db:/var/lib/mysql \
            --network=laravel_t_shirts_network \
            mariadb:latest \
