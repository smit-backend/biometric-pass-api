<?php

declare(strict_types=1);

namespace SmitBackend\BioGate\Contracts;

/**
 * Interface CryptoSignatureInterface
 *
 * @package SmitBackend\BioGate
 */
interface CryptoSignatureInterface
{
    public function execute(array $payload = []): mixed;
}
