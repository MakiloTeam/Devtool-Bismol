# Devtool Bismol

A cure for your bloated local dev environment.

## Presentation

View the presentation slides here:

https://docs.google.com/presentation/d/1k5CLSNje03sjBj6l7eTlWkdcWua90WMc4-z4FND_mhg/edit

## Usage

Start the local dev Docker services for MySQL and WordPress

```
sudo docker-compose up -d
```

Navigate to http://localhost within your web browser.

Install WordPress.

Activate the Devtool Bismol WordPress plugin.

WordPress shortcode

```
[mk_shortcode]
```

Stop the containers

```
sudo docker-compose stop
```
