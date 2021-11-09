# Dhii - Transformer Interface
[![Continuous Integration](https://github.com/Dhii/transformer-interface/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/Dhii/transformer-interface/actions/workflows/continuous-integration.yml)
[![Latest Stable Version](https://poser.pugx.org/dhii/transformer-interface/version)](https://packagist.org/packages/dhii/transformer-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/transformer-interface/v/unstable)](https://packagist.org/packages/dhii/transformer-interface)

## Details
Interfaces for data transformation.

### Interfaces
- [`TransformerInterface`] - Something that can transform a value to another value.
- [`TransformerFactoryInterface`] - Something that can create a transformer.
- [`TransformerAwareInterface`] - Something that exposes a transformer.
- [`TransformerExceptionInterface`] - Represents a problem related to a transformer.
- [`CouldNotTransformExceptionInterface`] - Represents a problem with the transformation process.

[`TransformerInterface`]:                                       src/TransformerInterface.php
[`TransformerFactoryInterface`]:                                src/TransformerFactoryInterface.php
[`TransformerAwareInterface`]:                                  src/TransformerAwareInterface.php
[`TransformerExceptionInterface`]:                              src/Exception/TransformerExceptionInterface.php
[`CouldNotTransformExceptionInterface`]:                        src/Exception/CouldNotTransformExceptionInterface.php
