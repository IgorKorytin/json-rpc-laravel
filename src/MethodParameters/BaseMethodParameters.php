<?php

declare(strict_types=1);

namespace AvtoDev\JsonRpc\MethodParameters;

use AvtoDev\JsonRpc\Traits\ValidateNonStrictValuesTrait;

class BaseMethodParameters implements MethodParametersInterface
{
    use ValidateNonStrictValuesTrait;

    /**
     * @var array<mixed>|object|null
     */
    protected $params;

    /**
     * {@inheritdoc}
     */
    public function parse($params): void
    {
        if ($this->validateParamsValue($params)) {
            $this->params = $params;
        }
    }

    /**
     * @return array<mixed>|object|null
     */
    public function getParams()
    {
        return $this->params;
    }
}
