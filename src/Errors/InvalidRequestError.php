<?php

declare(strict_types=1);

namespace AvtoDev\JsonRpc\Errors;

use Throwable;

class InvalidRequestError extends AbstractError
{
    /**
     * {@inheritdoc}
     *
     * @param string|null $message Error message
     */
    public function __construct(?string $message = null, int $code = 0, $data = null, ?Throwable $exception = null)
    {
        parent::__construct($message ?? 'Invalid Request', $code, $data, $exception);
    }
}
