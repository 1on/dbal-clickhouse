<?php

declare(strict_types=1);

/*
 * This file is part of the FODDBALClickHouse package -- Doctrine DBAL library
 * for ClickHouse (a column-oriented DBMS for OLAP <https://clickhouse.yandex/>)
 *
 * (c) FriendsOfDoctrine <https://github.com/FriendsOfDoctrine/>.
 *
 * For the full copyright and license inflormation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOD\DBALClickHouse\Types;

interface BitInterface extends NumericalTypeInterface
{
    public const EIGHT_BIT = 8;
    public const SIXTEEN_BIT = 16;
    public const THIRTY_TWO_BIT = 32;
    public const SIXTY_FOUR_BIT = 64;

    public function getBits(): int;
}
