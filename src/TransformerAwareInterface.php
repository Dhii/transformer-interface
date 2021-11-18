<?php

declare(strict_types=1);

namespace Dhii\Transformer;

/**
 * Something that exposes a transformer.
 *
 * @template Input
 * @template Output
 */
interface TransformerAwareInterface
{
    /**
     * Retrieves the transformer associated with this instance.
     *
     * @psalm-return TransformerInterface<\Input, \Output>
     */
    public function getTransformer(): TransformerInterface;
}
