<?php

declare(strict_types=1);

namespace LaminasCodingStandardTest\fixed;

use SQLite3;
use stdClass;

/**
  * This is a class level Summary.
   *
    * This is a class level Description.
     */
class CommentingAndDocBlocks
{
    /** @var string[] */
    public $singleArray;

    /** @var (int|string)[] */
    public $multiArray;

    /** @var string|null */
    protected $title;

    /**
     * <Summary>
     *
     * <Description>
     *
     * @internal
     * @deprecated
     * @link
     * @see
     * @uses
     * @param
     *
     * @return
     *
     * @throws
     *
     */
    public function testDocBlockSpacing(): void
    {
    }

    public function testInlineCommentMustBeAtTheEnd(): void
    {
        $hello = $world; /* comment */
        $hello = /* comment */ $world;
    }

    /**
     * Sets a single-line title.
     *
     * The `param` and `return` tags should be omitted as they are already
     * type hinted.
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        // there should be no docblock here
        $this->title = $title;
    }

    /**
     * All tags can be omitted as typehints describe it all.
     *
     * @param bool $createNew
     * @return stdClass|null
     */
    public function foo(bool $createNew): ?stdClass
    {
        if ($createNew) {
            return new stdClass();
        }
        return null;
    }

    /**
     * The returned array should be described with a `return` tag.
     *
     * @return SQLite3[] $connections
     */
    public function testIdeAutoCompletion(): array
    {
        /** @var SQLite3 $sqlite */
        foreach ($connections as $sqlite) {
            // there should be no docblock here
            $sqlite->open('/my/database/path');
        }

        return $connections;
    }
}
