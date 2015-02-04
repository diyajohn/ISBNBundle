<?php
namespace TestDemo\ISBNBundle\Services;

use Symfony\Component\Security\Core\Util\SecureRandom;
use TestDemo\ISBNBundle\Util\DigitManipulator;
use TestDemo\ISBNBundle\Util\ISBNFormatter;

/**
 * Class ISBNService
 * @package TestBundle\ISBNBundle\Services
 */
class ISBNService
{
    /**
     * Function that verifies if a given ISBN is valid
     * @param $isbn
     * @return bool|string
     */
    public function isValidISBN($isbn)
    {
        $isbn = ISBNFormatter::unformatISBN($isbn);
        $remainder = DigitManipulator::customMod(DigitManipulator::getMultipliedSum($isbn));
        if ($remainder == 0) {
            return true;
        }
        return false;
    }

    /**
     * Function that generates a valid ISBN
     * @return string
     */
    public function generateISBN()
    {
        $generator = new SecureRandom();
        $randomNumber = $generator->nextBytes(9);

        $firstRemainder = DigitManipulator::customMod(DigitManipulator::getMultipliedSum($randomNumber));
        $finalRemainder = DigitManipulator::customMod(11 - $firstRemainder);

        return ISBNFormatter::formatISBN($randomNumber.$finalRemainder);
    }
}