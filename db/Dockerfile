FROM postgres:15.12-alpine3.21

ARG DB_USER
ARG DB_PASSWORD
ARG DB_NAME

ENV POSTGRES_USER=${DB_USER}
ENV POSTGRES_PASSWORD=${DB_PASSWORD}
ENV POSTGRES_DB=${DB_NAME}

COPY hardware_stock_postgresql.sql /docker-entrypoint-initdb.d/
