<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 26/06/16
 * Time: 05:35 م
 */

namespace Mustafah15\Hasher;
use App\Http\Controllers\Controller;


class HasherController extends Controller
{
    public function getCode($plaintext,$key)
    {
        return (new HasherManger())->hashText($plaintext,$key);
    }

    public function getDecode($hash,$key)
    {
        return (new HasherManger())->decode($hash,$key);
    }
}