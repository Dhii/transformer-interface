<?php

declare(strict_types=1);

namespace Dhii\Transformer\Exception;

use Dhii\Transformer\TransformerAwareInterface;
use Throwable;

/**
 * An exception thrown in relation to a transformer.
 */
interface TransformerExceptionInterface extends
    Throwable,
    TransformerAwareInterface
{
}
