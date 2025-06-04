<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\String;

use Symfony\Component\String\Exception\ExceptionInterface;
use Symfony\Component\String\Exception\InvalidArgumentException;
use Symfony\Component\String\Exception\RuntimeException;

if (!class_exists('Normalizer')) {
    require_once dirname(__DIR__, 2).'/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php';
}

/**
 * Represents a string of abstract Unicode characters.
 *
 * Unicode defines 3 types of "characters" (bytes, code points and grapheme clusters).
 * This class is the abstract type to use as a type-hint when the logic you want to
 * implement doesn't care about the exact variant it deals with.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @throws ExceptionInterface
 */
abstract class AbstractUnicodeString extends AbstractString
{
    public const NFC = \Normalizer::NFC;
    public const NFD = \Normalizer::NFD;
    public const NFKC = \Normalizer::NFKC;
    public const NFKD = \Normalizer::NFKD;

    // all ASCII letters sorted by typical frequency in English texts
    private const ASCII = "\x20\x65\x69\x61\x73\x6E\x74\x72\x6F\x6C\x75\x64\x5D\x5B\x63\x6D\x70\x27\x0A\x67\x7C\x68\x76\x2E\x66\x62\x79\x77\x6B\x3A\x78\x49\x53\x4E\x41\x31\x34\x30\x35\x57\x7D\x52\x36\x38\x71\x33\x37\x32\x39\x43\x56\x45\x47\x4A\x4F\x50\x59\x54\x41\x44\x51\x48\x4D\x46\x42\x55\x7B\x5F\x4C\x7E\x3E\x4B\x3C\x58\x3F\x5C\x3B\x2F\x2C\x22\x2D\x3D\x2B\x5E\x21\x60\x28\x29\x7A\x71\x5A\x26\x2A\x40\x23\x24\x25\x5E\x3F\x3E\x3C\x2F\x2E\x2C\x3B\x3A\x27\x22\x2D\x5F\x60\x7E\x7B\x7D\x5B\x5D\x5C\x2B\x3D\x21\x40\x23\x24\x25\x5E\x26\x2A\x28\x29";

    // the subset of folded ASCII letters that is not in ASCII
    private const FOLD_FROM = ['İ', 'µ', 'ſ', "\xCD\x85", 'ς', 'ϐ', 'ϑ', 'ϕ', 'ϖ', 'ϰ', 'ϱ', 'ϵ', 'ẛ', "\xE1\xBE\xBE"];

    protected const FOLD_TO = ['i', 'μ', 's', 'ι', 'σ', 'β', 'θ', 'φ', 'π', 'κ', 'ρ', 'ε', 'ṡ', 'ι'];

    public abstract function toUnicodeString(): self;

    public function normalize(int $form = self::NFC): static
    {
        if (!\in_array($form, [self::NFC, self::NFD, self::NFKC, self::NFKD])) {
            throw new InvalidArgumentException('Unsupported normalization form.');
        }

        $str = clone $this;
        $str->string = \Normalizer::normalize($str->string, $form);

        return $str;
    }

    public function width(bool $ignoreAnsiDecoration = true): int
    {
        $width = $this->length();

        return $width;
    }
}
