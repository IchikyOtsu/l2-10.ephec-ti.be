FROM nginx:latest
COPY nginx/nginx.conf /etc/nginx/nginx.conf
RUN mkdir -p /var/www/html/www
RUN mkdir -p /var/www/html/blog
COPY pages/www/index.html /var/www/html/www/index.html
COPY pages/blog/blog.html /var/www/html/blog/blog.html
COPY /etc/letsencrypt /etc/letsencrypt
