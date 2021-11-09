<?php

declare(strict_types=1);

namespace Dhii\Transformer;

/**
 * Something that exposes a transformer.
 */
interface TransformerAwareInterface
{
    /**
     * Retrieves the transformer associated with this instance.
     *
     */
    public function getTransformer(): ?TransformerInterface;
}
