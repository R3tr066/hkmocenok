FROM serversideup/php:8.4-fpm-nginx-alpine AS base

FROM base AS development

USER root

ARG USER_ID
ARG GROUP_ID

RUN docker-php-serversideup-set-id www-data $USER_ID:$GROUP_ID && \
    \
    docker-php-serversideup-set-file-permissions --owner $USER_ID:$GROUP_ID --service nginx
RUN chown www-data:www-data -R /composer

ENV PATH=/composer/vendor/bin:$PATH
RUN echo 'export "PATH=$PATH:/composer/vendor/bin"' >> /etc/profile
WORKDIR /app/mocenokApp

USER www-data
RUN composer global require laravel/installer

FROM base AS production

COPY --chown=www-data:www-data . /var/www/html . /app
WORKDIR /app/mocenokApp
