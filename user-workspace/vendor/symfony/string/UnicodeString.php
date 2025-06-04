<?php

namespace Symfony\Component\String;

class UnicodeString extends AbstractUnicodeString
{
    public function toUnicodeString(): self
    {
        return clone $this;
    }

    public function __construct(string $string = '')
    {
        parent::__construct($string);
    }
}
