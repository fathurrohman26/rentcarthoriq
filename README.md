# Rent Car Thoriq

Custom Wordpress Site Developed By @fathurrohman26

## Shared Hosting Installation

```bash
bedrock (root)
├── composer.json
├── composer.lock
├── config
│   ├── application.php
│   └── environments
│       ├── development.php
│       └── staging.php
├── vendor
└── .env

public_html
├── wp
├── app
├── wp-config.php
└── index.php
```

## Custom web root

```bash
git apply patchs/change-webroot.patch
```
