<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;


use Merkeleon\PhpCryptocurrencyAddressValidation\Base58Validation;

class DOGETEST extends Base58Validation
{
    protected $base58PrefixToHexVersion = [
        'n' => '71',
        '9' => '16',
        'A' => '16',
    ];
}
