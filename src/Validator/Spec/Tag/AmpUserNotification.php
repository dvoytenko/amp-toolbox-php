<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpUserNotification extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::USER_NOTIFICATION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DATA_DISMISS_HREF,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::DATA_SHOW_IF_HREF,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                    SpecRule::ALLOW_EMPTY => false,
                ],
            ],
            [
                SpecRule::NAME => Attribute::ENCTYPE,
                SpecRule::VALUE => [
                    'application/x-www-form-urlencoded',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::NODISPLAY,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::USER_NOTIFICATION,
        ],
    ];
}