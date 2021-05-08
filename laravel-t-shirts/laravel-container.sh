docker run --name laravel-t-shirts -d \
    -p 88:80 \
    -p 8822:22 \
    --restart unless-stopped \
    --volume /home/valentin/Internship_Development-Aid/My_Application/application/laravel-t-shirts:/var/www/html \
    --network=laravel_t_shirts_network \
    amoraresco/it-academy-project:latest \
