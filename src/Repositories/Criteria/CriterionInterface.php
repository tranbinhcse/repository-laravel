<?php

namespace Tino\Repoist\Repositories\Criteria;

interface CriterionInterface
{
    public function apply($entity);
}
