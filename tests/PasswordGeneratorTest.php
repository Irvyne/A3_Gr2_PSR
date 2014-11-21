<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength = mb_strlen($password);

        $this->assertEquals($length, $passwordLength);
    }
}
