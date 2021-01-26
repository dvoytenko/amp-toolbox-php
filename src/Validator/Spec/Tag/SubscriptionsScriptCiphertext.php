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

final class SubscriptionsScriptCiphertext extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'subscriptions script ciphertext',
        SpecRule::MANDATORY_PARENT => 'subscriptions-section content swg_amp_cache_nonce',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::CIPHERTEXT,
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_DISPATCH',
            ],
            [
                SpecRule::NAME => Attribute::TYPE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_CASEI => [
                    'application/octet-stream',
                ],
            ],
        ],
        SpecRule::CDATA => [
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    SpecRule::REGEX => '<!--',
                    SpecRule::ERROR_MESSAGE => 'html comments',
                ],
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Element::BODY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}