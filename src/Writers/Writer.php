<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Utils\File;

abstract class Writer
{
    abstract public function write($path, $input): bool;

    public function put($path, $contents): bool
    {
        return (bool) File::put($path, $contents);
    }
}
