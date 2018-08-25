FROM nginx:1.11

#conf nginx
COPY symfony.vhost.tpl.conf /tmp/symfony.vhost.tpl.conf
COPY nginx.conf /etc/nginx/nginx.conf
COPY ./conf.d/. /etc/nginx/conf.d/.

CMD ["nginx", "-g", "daemon off;"]
