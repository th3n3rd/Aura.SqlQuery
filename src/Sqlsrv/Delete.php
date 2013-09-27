<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Sql
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Sql_Query\Sqlsrv;

use Aura\Sql_Query\Traits;
use Aura\Sql_Query\DeleteInterface;

/**
 *
 * An object for Sqlsrv DELETE queries.
 *
 * @package Aura.Sql
 *
 */
class Delete extends AbstractSqlsrv implements DeleteInterface
{
    use Traits\DeleteTrait;
}
