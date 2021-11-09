<?php

declare(strict_types=1);

namespace Dhii\Transformer\Exception;

/**
 * An exception thrown in relation to a transformer when it fails to transform the given source data.
 */
interface CouldNotTransformExceptionInterface extends TransformerExceptionInterface
{
    /**
     * Retrieves the source data that the transformer failed to transform.
     *
     * @return mixed|null The data that is being transformed.
     */
    public function getSourceData();
}
