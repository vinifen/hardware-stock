FROM postgres:15.12-alpine3.21

ENV POSTGRES_USER=postgres
ENV POSTGRES_PASSWORD=abc321
ENV POSTGRES_DB=hardware_stock

COPY hardware_stock_postgresql.sql /docker-entrypoint-initdb.d/
