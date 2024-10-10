<?php

namespace Hoyvoy\CrossDatabase;

use Hoyvoy\CrossDatabase\Query\Grammars\MariaDbGrammar as MariaDbQueryGrammar;
use Illuminate\Database\MariaDbConnection as IlluminateMariaDbConnection;

class MariaDbConnection extends IlluminateMariaDbConnection implements CanCrossDatabaseShazaamInterface
{
    /**
     * Get the default query grammar instance.
     *
     * @return \Illuminate\Database\Query\Grammars\MySqlGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        ($grammar = new MariaDbQueryGrammar())->setConnection($this);
        return $this->withTablePrefix($grammar);
    }
}
