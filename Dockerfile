FROM vimagick/opencart
RUN mv install ../
RUN mv system/storage ../
COPY config.php /var/www/html/config.php
COPY config-admin.php /var/www/html/admin/config.php
ADD install.sh install.sh
