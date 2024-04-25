<?php

declare(strict_types=1);

namespace Capitalist\Client;

interface VerificationTypes
{
    public const SMS_CODE_MOBILE = 'MOBILE',
    CERTIFICATE_SIGNATURE = 'SIGNATURE',
    PIN_PASSWORD = 'PIN';
}
