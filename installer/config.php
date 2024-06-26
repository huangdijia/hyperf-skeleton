<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'packages' => [
        'hyperf/amqp' => [
            'version' => '~3.1.0',
        ],
        'hyperf/async-queue' => [
            'version' => '~3.1.0',
        ],
        'hyperf/database' => [
            'version' => '~3.1.0',
        ],
        'hyperf/db-connection' => [
            'version' => '~3.1.0',
        ],
        'hyperf/model-cache' => [
            'version' => '~3.1.0',
        ],
        'hyperf/constants' => [
            'version' => '~3.1.0',
        ],
        'hyperf/json-rpc' => [
            'version' => '~3.1.0',
        ],
        'hyperf/redis' => [
            'version' => '~3.1.0',
        ],
        'hyperf/rpc' => [
            'version' => '~3.1.0',
        ],
        'hyperf/rpc-client' => [
            'version' => '~3.1.0',
        ],
        'hyperf/rpc-server' => [
            'version' => '~3.1.0',
        ],
        'hyperf/grpc-client' => [
            'version' => '~3.1.0',
        ],
        'hyperf/grpc-server' => [
            'version' => '~3.1.0',
        ],
        'hyperf/elasticsearch' => [
            'version' => '~3.1.0',
        ],
        'hyperf/config-apollo' => [
            'version' => '~3.1.0',
        ],
        'hyperf/config-aliyun-acm' => [
            'version' => '~3.1.0',
        ],
        'hyperf/config-etcd' => [
            'version' => '~3.1.0',
        ],
        'hyperf/config-nacos' => [
            'version' => '~3.1.0',
        ],
        'hyperf/tracer' => [
            'version' => '~3.1.0',
        ],
        'hyperf/service-governance' => [
            'version' => '~3.1.0',
        ],
        'pestphp/pest' => [
            'version' => '^2.34',
        ],
    ],
    'require-dev' => [
        'pestphp/pest',
    ],
    'questions' => [
        'database' => [
            'question' => 'Do you want to use Database (MySQL Client) ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/database',
                        'hyperf/db-connection',
                    ],
                    'resources' => [
                        'resources/database/databases.php' => 'config/autoload/databases.php',
                    ],
                ],
            ],
        ],
        'redis' => [
            'question' => 'Do you want to use Redis Client ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/redis',
                    ],
                    'resources' => [
                        'resources/database/redis.php' => 'config/autoload/redis.php',
                    ],
                ],
            ],
        ],
        'rpc' => [
            'question' => 'Which RPC protocol do you want to use ?',
            'default' => 'n',
            'required' => false,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'JSON RPC with Service Governance',
                    'packages' => [
                        'hyperf/json-rpc',
                        'hyperf/rpc',
                        'hyperf/rpc-client',
                        'hyperf/rpc-server',
                        'hyperf/service-governance',
                    ],
                    'resources' => [
                    ],
                ],
                2 => [
                    'name' => 'JSON RPC',
                    'packages' => [
                        'hyperf/json-rpc',
                        'hyperf/rpc',
                        'hyperf/rpc-client',
                        'hyperf/rpc-server',
                    ],
                    'resources' => [
                        'resources/jsonrpc/services.php' => 'config/autoload/services.php',
                    ],
                ],
                3 => [
                    'name' => 'gRPC',
                    'packages' => [
                        'hyperf/grpc-client',
                        'hyperf/grpc-server',
                    ],
                    'resources' => [
                    ],
                ],
            ],
        ],
        'config-center' => [
            'question' => 'Which config center do you want to use ?',
            'default' => 'n',
            'required' => false,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'Apollo',
                    'packages' => [
                        'hyperf/config-apollo',
                    ],
                    'resources' => [
                        'resources/config_center/config_apollo.php' => 'config/autoload/config_center.php',
                    ],
                ],
                2 => [
                    'name' => 'Aliyun ACM',
                    'packages' => [
                        'hyperf/config-aliyun-acm',
                    ],
                    'resources' => [
                        'resources/config_center/config_acm.php' => 'config/autoload/config_center.php',
                    ],
                ],
                3 => [
                    'name' => 'ETCD',
                    'packages' => [
                        'hyperf/config-etcd',
                    ],
                    'resources' => [
                        'resources/config_center/etcd.php' => 'config/autoload/etcd.php',
                        'resources/config_center/config_etcd.php' => 'config/autoload/config_center.php',
                    ],
                ],
                4 => [
                    'name' => 'Nacos',
                    'packages' => [
                        'hyperf/config-nacos',
                    ],
                    'resources' => [
                        'resources/config_center/nacos.php' => 'config/autoload/nacos.php',
                        'resources/config_center/config_nacos.php' => 'config/autoload/config_center.php',
                    ],
                ],
            ],
        ],
        'constants' => [
            'question' => 'Do you want to use hyperf/constants component ?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => false,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/constants',
                    ],
                    'resources' => [
                        'resources/constants/ErrorCode.php' => 'app/Constants/ErrorCode.php',
                        'resources/constants/BusinessException.php' => 'app/Exception/BusinessException.php',
                    ],
                ],
            ],
        ],
        'async-queue' => [
            'question' => 'Do you want to use hyperf/async-queue component ? (A simple redis queue component)',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/async-queue',
                    ],
                    'resources' => [
                        'resources/async_queue/async_queue.php' => 'config/autoload/async_queue.php',
                        'resources/async_queue/AsyncQueueConsumer.php' => 'app/Process/AsyncQueueConsumer.php',
                        'resources/async_queue/QueueHandleListener.php' => 'app/Listener/QueueHandleListener.php',
                        'resources/database/redis.php' => 'config/autoload/redis.php',
                    ],
                ],
            ],
        ],
        'amqp' => [
            'question' => 'Do you want to use hyperf/amqp component ?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/amqp',
                    ],
                    'resources' => [
                        'resources/amqp/amqp.php' => 'config/autoload/amqp.php',
                    ],
                ],
            ],
        ],
        'model-cache' => [
            'question' => 'Do you want to use hyperf/model-cache component ?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/model-cache',
                    ],
                    'resources' => [
                        'resources/model_cache/Model.php' => 'app/Model/Model.php',
                        'resources/model_cache/databases.php' => 'config/autoload/databases.php',
                        'resources/database/redis.php' => 'config/autoload/redis.php',
                    ],
                ],
            ],
        ],
        'elasticsearch' => [
            'question' => 'Do you want to use hyperf/elasticsearch component ?',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/elasticsearch',
                    ],
                    'resources' => [
                    ],
                ],
            ],
        ],
        'opentracing' => [
            'question' => 'Do you want to use hyperf/tracer component ? (An open tracing protocol component, adapte with Zipkin etc.)',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'hyperf/tracer',
                    ],
                    'resources' => [
                        'resources/tracer/opentracing.php' => 'config/autoload/opentracing.php',
                    ],
                ],
            ],
        ],
        'pest' => [
            'question' => 'Do you want to use pestphp/pest component ? (Pest is a testing framework with a focus on simplicity,
            meticulously designed to bring back the joy of testing in PHP.)',
            'default' => 'n',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'pestphp/pest',
                    ],
                    'resources' => [
                        'resources/pest/Feature/ExampleTest.php' => 'test/Feature/ExampleTest.php',
                        'resources/pest/Unit/ExampleTest.php' => 'test/Unit/ExampleTest.php',
                        'resources/pest/Pest.php' => 'test/Pest.php',
                        'resources/pest/TestCase.php' => 'test/TestCase.php',
                    ],
                ],
            ],
        ],
    ],
];
