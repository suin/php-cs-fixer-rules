<?php

declare(strict_types=1);

namespace Suin\PhpCsFixer;

use PHPUnit\Framework\TestCase;

class RulesTest extends TestCase
{
    public function test_overwrite_rules(): void
    {
        $rules1 = Rules::create();
        self::assertTrue($rules1['no_leading_namespace_whitespace']);
        $rules2 = Rules::create([
            'no_leading_namespace_whitespace' => false,
        ]);
        self::assertFalse($rules2['no_leading_namespace_whitespace']);
        self::assertCount(\count($rules1), $rules2);
    }
}
