docker run -d --name mailhog \
           -p 8025:8025 \
           --net laravel_t_shirts_network \
           --restart unless-stopped \
           --expose 8025 \
           mailhog/mailhog
