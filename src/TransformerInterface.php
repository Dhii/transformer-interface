<?php

declare(strict_types=1);

namespace Dhii\Transformer;

use Dhii\Transformer\Exception\CouldNotTransformExceptionInterface;
use Dhii\Transformer\Exception\TransformerExceptionInterface;

/**
 * Something that can transform some source data into some output data.
 */
interface TransformerInterface
{
    /**
     * Transforms some source data into some output data.
     *
     * @param mixed $source The source data to transform.
     *
     * @throws TransformerExceptionInterface       If an error occurred during transformation.
     * @throws CouldNotTransformExceptionInterface If the given source data could not be transformed.
     *
     * @return mixed The output data.
     */
    public function transform($source);
}
