<?php

declare(strict_types=1);

namespace Dhii\Transformer;

/**
 * A factory of transformers.
 */
interface TransformerFactoryInterface
{
    /**
     * Creates a transformer.
     *
     * @return TransformerInterface The new transformer.
     */
    public function createTransformer(): TransformerInterface;
}
