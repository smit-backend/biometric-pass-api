<?php

declare(strict_types=1);

namespace SmitBackend\BioGate;

use SmitBackend\BioGate\Contracts\CryptoSignatureInterface;

/**
 * Class BiometricVerifier
 *
 * @package SmitBackend\BioGate
 */
class BiometricVerifier implements CryptoSignatureInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
