# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Removed
- **BC Break**: Support for PHP < 7.2 (#2).
- **BC Break**: Support for obsolete dependencies (#2).
- Support for Phan, NetBeans, Travis, CodeClimate, phpmd (#2).

### Changed
- **BC Break**: `TransformerFactoryInterface#make()` renamed to `createTransformer()`.
It is now standalone, and doesn't require params.

### Added
- Support for PHP >= 8.0 (#2).
- A virtual environment (#2).
- Code quality tools and configs (#2).
- PHPStorm configs (#2).

## [0.1-alpha1] - 2018-05-15
Initial version.
