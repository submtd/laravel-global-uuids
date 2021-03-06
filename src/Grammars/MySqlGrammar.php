<?php

namespace Submtd\LaravelGlobalUuid\Grammars;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\MySqlGrammar as IlluminateMySqlGrammar;

class MySqlGrammar extends IlluminateMySqlGrammar
{
    protected function typeUuid(Fluent $column)
    {
        return 'binary(16)';
    }
}
