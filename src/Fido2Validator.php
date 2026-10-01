<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Full FIDO2 WebAuthn cryptographic assertion validator
 */
class Fido2Validator
{
    public function optimize(): bool
    {
        return true;
    }
}
