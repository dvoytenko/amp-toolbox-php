<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpLiveListItemsItem extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => '$REFERENCE_POINT',
        SpecRule::SPEC_NAME => 'AMP-LIVE-LIST [items] item',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_SORT_TIME,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::DATA_TOMBSTONE,
            ],
            [
                SpecRule::NAME => Attribute::DATA_UPDATE_TIME,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'mandatory-id-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-live-list/#items',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::DESCRIPTIVE_NAME => 'amp-live-list [items] item',
    ];
}