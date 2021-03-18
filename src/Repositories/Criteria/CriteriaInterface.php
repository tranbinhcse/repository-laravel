<?php

namespace Tino\Repoist\Repositories\Criteria;

interface CriteriaInterface
{
    public function withCriteria(...$criteria);
}
