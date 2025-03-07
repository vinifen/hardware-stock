#!/bin/sh

# web

envsubst '${WEB_DOMAIN}' < /web/nginx.conf > /etc/nginx/nginx.conf

cat /etc/nginx/nginx.conf

exec nginx -g 'daemon off;'

