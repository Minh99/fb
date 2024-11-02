server {
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    root /var/www/html/redirect/;
    index index.php index.html index.htm index.nginx-debian.html;

    server_name elite-business-manager.site www.elite-business-manager.site;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    client_max_body_size 500M;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~ /\.ht {
        deny all;
    }

    listen 443 ssl;
    ssl_certificate /etc/letsencrypt/live/elite-business-manager.site/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/elite-business-manager.site/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;
}

server {
    listen 80;
    server_name elite-business-manager.site www.elite-business-manager.site;
    return 301 https://$host$request_uri;
}

# Cấu hình cho domain elite-business-manager.pro
server {
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    root /var/www/html/fb/public/;
    index index.php index.html index.htm index.nginx-debian.html;

    server_name elite-business-manager.pro www.elite-business-manager.pro;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    client_max_body_size 500M;

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~ /\.ht {
        deny all;
    }

    listen 443 ssl;
    ssl_certificate /etc/letsencrypt/live/elite-business-manager.pro/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/elite-business-manager.pro/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;
}

server {
    listen 80;
    server_name elite-business-manager.pro www.elite-business-manager.pro;
    return 301 https://$host$request_uri;
}