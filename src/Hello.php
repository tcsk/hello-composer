<?php

/*
 * (c) Tibor Nagy <tibornagy77@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace tcsk\HelloComposer;

class Hello
{
    public function say($toSay = "Nothing given")
    {
        return $toSay.' updated';
    }
}
