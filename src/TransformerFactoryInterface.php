<?php

declare(strict_types=1);

namespace Dhii\Transformer;

use Exception;

/**
 * A factory of transformers.
 *
 * @template Input
 * @template Output
 */
interface TransformerFactoryInterface
{
    /**
     * Creates a transformer.
     *
     * @return TransformerInterface<\Input, \Output> The new transformer.
     * @throws Exception If problem creating.
     */
    public function createTransformer(): TransformerInterface;
}
