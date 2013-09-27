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
namespace Aura\Sql_Query\Mysql;

use Aura\Sql_Query\Traits;

/**
 *
 * An object for MySQL UPDATE queries.
 *
 * @package Aura.Sql
 *
 */
class Update extends AbstractMysql
{
    use Traits\UpdateTrait;
    use Traits\LimitTrait;
    use Traits\OrderByTrait;
    
    const FLAG_IGNORE = 'IGNORE';
    const FLAG_LOW_PRIORITY = 'LOW_PRIORITY';

    /**
     * 
     * Converts this query object to a string.
     * 
     * @return string
     * 
     */
    protected function build()
    {
        return 'UPDATE' . $this->buildFlags() . " {$this->table}" . PHP_EOL
             . $this->buildValuesForUpdate()
             . $this->buildWhere()
             . $this->buildOrderBy()
             . $this->buildLimit()
             . PHP_EOL;
    }

    /**
     *
     * Adds or removes LOW_PRIORITY flag.
     *
     * @param bool $enable Set or unset flag (default true).
     *
     * @return $this
     *
     */
    public function lowPriority($enable = true)
    {
        $this->setFlag(self::FLAG_LOW_PRIORITY, $enable);
        return $this;
    }

    /**
     *
     * Adds or removes IGNORE flag.
     *
     * @param bool $enable Set or unset flag (default true).
     *
     * @return $this
     *
     */
    public function ignore($enable = true)
    {
        $this->setFlag(self::FLAG_IGNORE, $enable);
        return $this;
    }
}