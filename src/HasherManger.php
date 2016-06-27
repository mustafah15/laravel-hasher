<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 26/06/16
 * Time: 05:41 م
 */

namespace Mustafah15\Hasher;
use phpseclib\Crypt\AES;

use phpseclib\Crypt;

class HasherManger
{
    public function decode($hash,$key)
    {
        $cipher = new AES();

        $cipher->setKey($key);
        $cipher->setIV($cipher->getBlockLength());

        return $cipher->decrypt($hash);
    }

    public function hashText($plaintext,$key)
    {
        $cipher = new AES();

        $cipher->setKey($key);
        $cipher->setIV($cipher->getBlockLength());

        return $cipher->encrypt($plaintext);
    }
}