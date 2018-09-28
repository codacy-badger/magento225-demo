<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '15758b50ef16234ddb8fc800d18bee69'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '192.168.1.192',
                'dbname' => 'srtpl_magento225',
                'username' => 'srtpl',
                'password' => '123456',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'profiler' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'translate' => 0,
        'config_webservice' => 0,
        'compiled_config' => 1
    ],
    'install' => [
        'date' => 'Fri, 24 Aug 2018 12:55:19 +0000'
    ],
    'system' => [
        'default' => [
            'dev' => [
                'js' => [
                    'session_storage_key' => 'collected_errors'
                ],
                'restrict' => [
                    'allow_ips' => NULL
                ]
            ],
            'system' => [
                'smtp' => [
                    'host' => 'localhost',
                    'port' => '25'
                ],
                'full_page_cache' => [
                    'varnish' => [
                        'access_list' => '192.168.1.192',
                        'backend_host' => '192.168.1.192',
                        'backend_port' => '8080'
                    ]
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'http://magento225.sr/',
                    'base_link_url' => '{{unsecure_base_url}}'
                ],
                'secure' => [
                    'base_url' => '{{unsecure_base_url}}',
                    'base_link_url' => '{{secure_base_url}}'
                ],
                'default' => [
                    'front' => 'cms'
                ]
            ],
            'admin' => [
                'url' => [
                    'custom' => NULL
                ]
            ],
            'currency' => [
                'import' => [
                    'error_email' => NULL
                ]
            ],
            'customer' => [
                'create_account' => [
                    'email_domain' => 'example.com'
                ]
            ],
            'msp_devtools' => [
                'general' => [
                    'enabled' => '0',
                    'authorized_ranges' => '0.0.0.0/0'
                ],
                'phpstorm' => [
                    'enabled' => '0',
                    'port' => '8091'
                ]
            ],
            'catalog' => [
                'productalert_cron' => [
                    'error_email' => NULL
                ]
            ],
            'payment' => [
                'payflowpro' => [
                    'user' => NULL,
                    'pwd' => NULL
                ],
                'payflow_link' => [
                    'pwd' => NULL,
                    'url_method' => 'GET'
                ],
                'payflow_advanced' => [
                    'user' => 'PayPal',
                    'pwd' => NULL,
                    'url_method' => 'GET'
                ],
                'authorizenet_directpost' => [
                    'debug' => '0',
                    'email_customer' => '0',
                    'login' => NULL,
                    'merchant_email' => NULL,
                    'test' => '1',
                    'trans_key' => NULL,
                    'trans_md5' => NULL,
                    'cgi_url' => 'https://secure.authorize.net/gateway/transact.dll',
                    'cgi_url_td' => 'https://api2.authorize.net/xml/v1/request.api'
                ],
                'braintree' => [
                    'private_key' => NULL
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ]
            ],
            'trans_email' => [
                'ident_custom1' => [
                    'email' => 'custom1@example.com',
                    'name' => 'Custom 1'
                ],
                'ident_custom2' => [
                    'email' => 'custom2@example.com',
                    'name' => 'Custom 2'
                ],
                'ident_general' => [
                    'email' => 'hitesh.yadav@sphererays.net',
                    'name' => 'Owner'
                ],
                'ident_sales' => [
                    'email' => 'sales@example.com',
                    'name' => 'Sales'
                ],
                'ident_support' => [
                    'email' => 'support@example.com',
                    'name' => 'CustomerSupport'
                ]
            ],
            'paypal' => [
                'wpp' => [
                    'api_password' => NULL,
                    'api_signature' => NULL,
                    'api_username' => NULL
                ],
                'fetch_reports' => [
                    'ftp_login' => NULL,
                    'ftp_password' => NULL
                ]
            ],
            'carriers' => [
                'dhl' => [
                    'account' => NULL,
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
                    'id' => NULL,
                    'password' => NULL,
                    'debug' => '0'
                ],
                'fedex' => [
                    'account' => NULL,
                    'meter_number' => NULL,
                    'key' => NULL,
                    'password' => NULL,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
                    'smartpost_hubid' => NULL
                ],
                'ups' => [
                    'access_license_number' => NULL,
                    'gateway_url' => 'http://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'tracking_xml_url' => 'https://www.ups.com/ups.app/xml/Track',
                    'username' => NULL,
                    'password' => NULL,
                    'is_account_live' => '0',
                    'shipper_number' => NULL,
                    'debug' => '0'
                ],
                'usps' => [
                    'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => NULL,
                    'password' => NULL
                ]
            ],
            'analytics' => [
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/deployments.xml',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events'
                ]
            ],
            'fraud_protection' => [
                'signifyd' => [
                    'api_url' => 'https://api.signifyd.com/v2/',
                    'api_key' => NULL
                ]
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => NULL
                ]
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_subscribe' => [
                            'schedule' => [
                                'cron_expr' => '0 * * * *'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
