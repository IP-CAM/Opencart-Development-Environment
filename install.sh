#!/bin/bash

mv ../install .

php install/cli_install.php install \
  --db_hostname ${OPENCART_DB_HOSTNAME} \
  --db_username ${OPENCART_DB_USERNAME} \
  --db_password ${OPENCART_DB_PASSWORD} \
  --db_database ${OPENCART_DB_DATABASE} \
  --db_driver mysqli \
  --db_port 3306 \
  --username ${OPENCART_ADMIN_USERNAME} \
  --password ${OPENCART_ADMIN_PASSWORD} \
  --email ${OPENCART_ADMIN_EMAIL} \
  --http_server "${OPENCART_HTTP_SERVER}"

mv install ../
