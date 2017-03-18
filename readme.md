# Laravel SAML SP Demo

Demo - [https://laravel-saml-sp-demo.herokuapp.com](https://laravel-saml-sp-demo.herokuapp.com)

## Overview

Laravel 5.4 application showing implementation of SAML authentication as a Service Provider.

This demo uses the [aacotroneo/laravel-saml2](https://github.com/aacotroneo/laravel-saml2) package and [SSOCircle](http://www.ssocircle.com) as Identity Provider.


## Installation

Clone Project

```sh
git clone https://github.com/taiyeoguns/laravel-saml-sp-demo.git laravelsamlspdemo
```

Install Composer dependencies

```sh
cd laravelsamlspdemo
composer install
```

Maintain database details in `.env` file

```sh
cp .env.example .env
```

Migrate tables

```sh
php artisan migrate
```

Generate app key and start server

```sh
php artisan key:generate && php artisan serve
```


## IdP Setup

- Login to [SSOCircle](http://www.ssocircle.com) or create an account.
- Click on `Manage Metadata` and select `Add new Service Provider`.
- For `FQDN`, enter:
<br />`http://localhost:8000`
- Select all Assertion attributes, `FirstName`, `LastName`, `EmailAddress`
- In the Laravel application, browse to: `http://localhost:8000/saml2/metadata` and copy the xml
- Back in SSOCircle metadata, paste the copied xml in `Insert your metadata information`
- Click `Submit` to save metadata.


## Test

- Browse to `http://localhost:8000`
- Click on `Login` link.
- You will be forwarded to the SSOCircle. After successful authentication at the IdP, it will redirect to the Laravel application and user will be logged in.


## Further Information

- [SAML Overview](https://github.com/jch/saml)
- [SSO Circle IdP details](https://idp.ssocircle.com)