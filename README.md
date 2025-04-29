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

# Optional 
logs
└── debug.log
```

## Shared Hosting Patchs

```bash
git apply patchs/change-webroot.patch
git apply patchs/change-webpath.patch
```

## Logs (Custom)

```env
# Specify optional debug.log path
# WP_DEBUG_LOG='/path/to/logs/debug.log'
```
