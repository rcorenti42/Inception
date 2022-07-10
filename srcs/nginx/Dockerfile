FROM debian:buster

EXPOSE 443

COPY conf/default.conf /etc/nginx/conf.d/

RUN apt-get update && apt-get install -y \
    nginx \
    openssl && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir -p \
    /etc/nginx/ssl/private \
    /etc/nginx/ssl/certs

RUN openssl req -x509 -nodes \
    -out /etc/nginx/ssl/certs/rcorenti.csr \
    -keyout /etc/nginx/ssl/private/rcorenti.key \
    -subj "/C=FR/ST=IDF/L=Paris/O=42/OU=Student/CN=rcorenti.42.fr/"

ENTRYPOINT ["nginx", "-g", "daemon off;"]