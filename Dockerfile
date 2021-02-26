# Dockerfile
FROM gcr.io/r4m-devops-labs/route4me/lsi-5.7:v1
# Install composer dependencies
RUN composer require $PACKAGE_NAME:"~99.0.0" \
        zendframework/zend-diactoros:"~1.0" \
        predis/predis:"^1.1" \
        shiftonelabs/laravel-nomad:"2.0" \
        fhteam/laravel-amqp:"3.1.1" \
        kainxspirits/laravel-pubsub-queue:"0.4.99" \
        pusher/pusher-php-server:"^4.0" \
        s-ichikawa/laravel-sendgrid-driver:"2.1.99" \
        superbalist/flysystem-google-storage:"^7.0" \
        superbalist/laravel-google-cloud-storage:"^2.0" \
        spatie/laravel-responsecache:"6.1.99" \
        --prefer-dist --no-interaction --update-no-dev

RUN chmod 0777 -R ./bootstrap/cache; \
    touch ./storage/logs/laravel.log; \
    chmod 0777 -R ./storage;


# Healthcheck
RUN echo "<?php echo 'pong'; ?>" > /var/www/public/ping.php

RUN echo '<?php' > routes/api.php
RUN echo '<?php' > routes/web.php
RUN echo '<?php' > routes/channels.php
RUN echo '<?php' > routes/console.php

# Prepare modules
RUN composer dump-autoload
