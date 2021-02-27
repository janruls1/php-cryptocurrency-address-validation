<?php

namespace Tests\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Validation;


class DOGETest extends BaseValidationTestCase
{
    public function getValidationInstance(): Validation
    {
        return Validation::make('DOGETEST');
    }

    public function testaddressProvider()
    {
        /** @var Validation $validator*/
        $validator = Validation::make('DOGETEST');

        self::assertEquals(true, $validator->validate('nZV1NH2Dtq1ib3Vk9ng1aPkbfdhE1RiBN4'));
        self::assertEquals(true, $validator->validate('nmVufBD1xhB7cW4MuahtjSBozDe3cq5KEn'));
        self::assertEquals(true, $validator->validate('nakNpi9gLyznewvx3CAK2FocDyY9w22tQw'));
        self::assertEquals(false, $validator->validate('1QLbGuc3WGKKKpLs4pBp9H6jiQ2MgPkXRp'));
        self::assertEquals(false, $validator->validate('3CDJNfdWX8m2NwuGUV3nhXHXEeLygMXoAj'));
        self::assertEquals(false, $validator->validate('LbTjMGN7gELw4KbeyQf6cTCq859hD18guE'));

        return [
            ['nZV1NH2Dtq1ib3Vk9ng1aPkbfdhE1RiBN4', true],
            ['nmVufBD1xhB7cW4MuahtjSBozDe3cq5KEn', true],
            ['nakNpi9gLyznewvx3CAK2FocDyY9w22tQw', true],
            ['1QLbGuc3WGKKKpLs4pBp9H6jiQ2MgPkXRp', false],
            ['3CDJNfdWX8m2NwuGUV3nhXHXEeLygMXoAj', false],
            ['LbTjMGN7gELw4KbeyQf6cTCq859hD18guE', false],
        ];
    }

    public function addressProvider()
    {
        // TODO: Implement addressProvider() method.
    }
}
