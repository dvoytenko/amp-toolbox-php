<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Ins extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::INS,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATETIME,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'cite-attr',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
    ];
}