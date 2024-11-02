server {
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    root /var/www/html/redirect/;
    index index.php index.html index.htm index.nginx-debian.html;

    server_name elite-business-manager.site www.elite-business-manager.site;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    # set client body size to 500M #
    client_max_body_size 500M;

    # Increase buffer size to deal with too long URL (especially on redirect)
    fastcgi_buffers 8 16k;
    fastcgi_buffer_size 32k;

    location ~ \.php$ {
       fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        if (!-f $document_root$fastcgi_script_name) {
            return 404;
        }
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        fastcgi_param REALPATHTEST $realpath_root;
    }

    location ~ /\.ht {
        deny all;
    }


    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/elite-business-manager.site/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/elite-business-manager.site/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot
}

server {
    if ($host = www.elite-business-manager.site) {
        return 301 https://$host$request_uri;
    } # managed by Certbot


    if ($host = elite-business-manager.site) {
        return 301 https://$host$request_uri;
    } # managed by Certbot

    server_name elite-business-manager.site www.elite-business-manager.site;
    listen 80;
    return 404; # managed by Certbot
}