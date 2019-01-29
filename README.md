# OpenCart
A development environment and production image for using the OpenCart software.

## Getting Started

If you do not have an existing OpenCart dataset, you can access the installer by executing the following:
`docker-compose run opencart bash install.sh`

To customize any of the OpenCart configuration options, specify them as environment variables. With Docker Compose, you can add them to a .env file.

```
OPENCART_HTTP_SERVER: http://localhost:8000/
OPENCART_DB_HOSTNAME: db
OPENCART_DB_USERNAME: root
OPENCART_DB_PASSWORD: opencart
OPENCART_DB_DATABASE: opencart
OPENCART_DB_PREFIX: oc_
OPENCART_DB_PORT: 3306
OPENCART_ADMIN_USERNAME: admin
OPENCART_ADMIN_PASSWORD: admin
OPENCART_ADMIN_EMAIL: admin@my.domain
```
