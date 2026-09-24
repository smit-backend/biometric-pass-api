<?php

return [
    'enabled' => env('BIOMETRIC_PASS_API_ENABLED', true),
    'timeout' => env('BIOMETRIC_PASS_API_TIMEOUT', 30),
    'log_channel' => env('BIOMETRIC_PASS_API_LOG', 'stack'),
];
