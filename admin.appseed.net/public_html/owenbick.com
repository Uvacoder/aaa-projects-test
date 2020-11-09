server {
        listen 80;
        listen [::]:80;

        root /var/www/owenbick.com/public_html;
        index index.php index.html index.htm index.nginx-debian.html;

        server_name owenbick.com www.owenbick.com;

        location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
