FROM postgres:14-alpine3.21

ENV POSTGRES_USER=laravel
ENV POSTGRES_PASSWORD=secret
ENV POSTGRES_DB=laravel_db

EXPOSE 5432