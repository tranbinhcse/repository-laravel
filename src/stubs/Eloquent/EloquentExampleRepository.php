<?php

namespace %namespaces.repositories%;

use %model%;
use %contract%;

use Tino\Repoist\Repositories\Eloquent\AbstractRepository;

class Eloquent%modelName%Repository extends AbstractRepository implements %contractName%
{
    public function entity()
    {
        return %modelName%::class;
    }
}
