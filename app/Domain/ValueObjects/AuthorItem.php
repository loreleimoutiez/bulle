<?php

namespace App\Domain\ValueObjects;

use Carbon\Carbon;

class AuthorItem
{
    public function __construct(
        public string      $name,
        public string      $slug,
        public int         $postsCount,
        public string      $lastPostTitle,
        public string      $lastPostSlug,
        public Carbon      $lastPostDate
    )
    {
    }

    public static function from(
        string $name,
        string $slug,
        int    $postsCount,
        string $lastPostTitle,
        string $lastPostSlug,
        Carbon $lastPostDate
    ): self
    {
        return new self(
            $name,
            $slug,
            $postsCount,
            $lastPostTitle,
            $lastPostSlug,
            $lastPostDate
        );
    }
}
