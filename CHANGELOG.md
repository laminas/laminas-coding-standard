# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 2.1.1 - 2020-10-24


-----

### Release Notes for [2.1.1](https://github.com/laminas/laminas-coding-standard/milestone/4)

2.1.x bugfix release (patch)

### 2.1.1

- Total issues resolved: **3**
- Total pull requests resolved: **4**
- Total contributors: **3**

#### Documentation

 - [45: docs: add example for type hinting in docblocks](https://github.com/laminas/laminas-coding-standard/pull/45) thanks to @geerteltink and @Xerkus

#### Bug

 - [44: fix: unused imports and generics](https://github.com/laminas/laminas-coding-standard/pull/44) thanks to @geerteltink
 - [41: fix: update dependencies to ensure some fixes are included](https://github.com/laminas/laminas-coding-standard/pull/41) thanks to @geerteltink

#### Enhancement

 - [42: feat: php 8 support](https://github.com/laminas/laminas-coding-standard/pull/42) thanks to @geerteltink and @boesing

## 2.0.1 - 2020-07-02

### Added

- [#34](https://github.com/laminas/laminas-coding-standard/pull/34) Added support for `dealerdirect/phpcodesniffer-composer-installer` 0.7 and thus composer 2.0

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.0.0 - 2020-05-04

### Added

- Nothing.

### Changed

- [zendframework/zend-coding-standard#22](https://github.com/zendframework/zend-coding-standard/pull/22) refactors
  documentation. It now follows the PHP-FIG PSR-12 style.
- [zendframework/zend-coding-standard#22](https://github.com/zendframework/zend-coding-standard/pull/22) refactors
  the ruleset. It uses PSR-12 as the base ruleset with these additional rules:

  - The short open tag SHOULD NOT be used.
  - Deprecated features SHOULD be avoided.
  - The backtick operator MUST NOT be used.
  - The `goto` language construct SHOULD NOT be used.
  - The `global` keyword MUST NOT be used.
  - The constant `PHP_SAPI` SHOULD be used instead of the `php_sapi_name()`
    function.
  - Aliases SHOULD NOT be used.
  - There MUST NOT be a space before a semicolon. Redundant semicolons SHOULD
    be avoided.
  - Non executable code MUST be removed.
  - There MUST be a single space after language constructs.
  - Parentheses MUST be omitted where possible.
  - PHP function calls MUST be in lowercase.
  - There MAY NOT be any content before the opening tag. Inline HTML in PHP code
    SHOULD be avoided. All code MUST be executable and non executable code SHOULD
    be removed.
  - The `declare(strict_types=1)` directive MUST be declared and be the first
    statement in a file.
  - There MAY be maximum one blank line to improve readability and to indicate
    related blocks of code except where explicitly forbidden.
  - There MAY NOT be any blank line after opening braces and before closing braces.
  - There MUST NOT be a space before a semicolon. Redundant semicolons SHOULD be
    avoided.
  - Encapsed strings MAY be used instead of concatenating strings. When
    concatenating strings, there MUST be a single whitespace before and after the
    concatenation operator. The concatenation operator MUST NOT be the at the end
    of a line. If multi-line concatenation is used there MUST be an indent of 4
    spaces.
  - Variable names MUST be declared in camelCase.
  - The short array syntax MUST be used to define arrays.
  - All values in multiline arrays must be indented with 4 spaces.
  - All array values must be followed by a comma, including the last value.
  - There MUST NOT be whitespace around the opening bracket or before the closing
    bracket when referencing an array.
  - All double arrow symbols MUST be aligned to one space after the longest array
    key.
  - The short list syntax `[...]` SHOULD be used instead of `list(...)`.
  - There MUST be a single space after the namespace keyword and there MAY NOT be
    a space around a namespace separator.
  - Import statements MUST be alphabetically sorted.
  - Unused import statements SHOULD be removed.
  - Fancy group import statements MUST NOT be used.
  - Each import statement MUST be on its own line.
  - Import statement aliases for classes, traits, functions and constants MUST
    be useful, meaning that aliases SHOULD only be used if a class with the same
    name is imported.
  - Classes, traits, interfaces, constants and functions MUST be imported.
  - There MUST NOT be duplicate class names.
  - The file name MUST match the case of the terminating class name.
  - PHP 4 style constructors MUST NOT be used.
  - Correct class name casing MUST be used.
  - Abstract classes MUST have a `Abstract` prefix.
  - Exception classes MUST have a `Exception` suffix.
  - Interface classes MUST have a `Interface` suffix.
  - Trait classes MUST have a `Trait` suffix.
  - For self-reference a class lower-case `self::` MUST be used without spaces
    around the scope resolution operator.
  - Class name resolution via `::class` MUST be used instead of `__CLASS__`,
    `get_class()`, `get_class($this)`, `get_called_class()`, `get_parent_class()`
    and string reference.
  - There MAY NOT be any whitespace around the double colon operator.
  - Unused private methods, constants and properties MUST be removed.
  - Traits MUST be sorted alphabetically.
  - Default null values MUST be omitted for class properties.
  - There MUST be a single empty line between methods in a class.
  - The pseudo-variable `$this` MUST NOT be called inside a static method or
    function.
  - Returned variables SHOULD be useful and SHOULD NOT be assigned to a value and
    returned on the next line.
  - The question mark MUST be used when the default argument value is null.
  - The `final` keyword on methods MUST be omitted in final declared classes.
  - There MUST be one single space after `break` and `continue` structures with
    a numeric argument argument.
  - Statements MUST NOT be empty, except for catch statements.
  - The `continue` control structure MUST NOT be used in switch statements,
    `break` SHOULD be used instead.
  - All catch blocks MUST be reachable.
  - There MUST be at least one space on either side of an equals sign used
    to assign a value to a variable. In case of a block of related
    assignments, more spaces MUST be inserted before the equal sign to
    promote readability.
  - There MUST NOT be any white space around the object operator UNLESS
    multilines are used.
  - Loose comparison operators SHOULD NOT be used, use strict comparison
    operators instead. e.g. use `===` instead of `==`.
  - The null coalesce operator SHOULD be used when possible.
  - Assignment operators SHOULD be used when possible.
  - The `&&` and `||` operators SHOULD be used instead of `and` and `or`.
  - There MUST be one whitespace after a type casting operator.
  - There MUST be one whitespace after unary not.
  - Inherited variables passed via `use` MUST be used in closures.
  - Code SHOULD be written so it explains itself. DocBlocks and comments
    SHOULD only be used if necessary. They MUST NOT start with `#` and MUST
    NOT be empty. They SHOULD NOT be used for already typehinted arguments,
    except arrays.
  - The asterisks in a DocBlock should align, and there should be one
    space between the asterisk and tag.
  - PHPDoc tags `@param`, `@return` and `@throws` SHOULD not be aligned or
    contain multiple spaces between the tag, type and description.
  - If a function throws any exceptions, it SHOULD be documented with
    `@throws` tags.
  - DocBlocks MUST follow a specific order of annotations with empty
    newline between specific groups.
  - The annotations `@api`, `@author`, `@category`, `@created`, `@package`,
    `@subpackage` and `@version` MUST NOT be used in comments. Git commits
    provide accurate information.
  - The words _private_, _protected_, _static_, _constructor_, _deconstructor_,
    _Created by_, _getter_ and _setter_, MUST NOT be used in comments.
  - The `@var` tag MAY be used in inline comments to document the _Type_
    of properties. Single-line property comments with a `@var` tag SHOULD
    be written as one-liners. The `@var` MAY NOT be used for constants.
  - The correct tag case of PHPDocs and PHPUnit tags MUST be used.
  - Inline DocComments MAY be used at the end of the line, with at least a
    single space preceding. Inline DocComments MUST NOT be placed after curly
    brackets.
  - Heredoc and nowdoc tags MUST be uppercase without spaces.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#16](https://github.com/laminas/laminas-coding-standard/pull/16) fixes the placement of strict type declarations.
- [#12](https://github.com/laminas/laminas-coding-standard/pull/12) fixes coding standard name.

## 1.0.0 - 2016-11-09

Initial public release. Incorporates rules for:

- PSR-2
- disallow long array syntax
- space after not operator
- whitespace around operators
- disallow superfluous whitespace

and enables color reporting by default.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.
