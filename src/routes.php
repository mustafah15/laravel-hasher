<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/06/16
 * Time: 10:31 ص
 */

Route::get('hasher/code/{plaintext}/{key}',
    'mustafah15\hasher\HasherController@getCode');

Route::get('hasher/decode/{hash}/{key}',
    'mustafah15\hasher\HasherController@getDecode');