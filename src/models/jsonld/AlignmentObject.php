<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * AlignmentObject - An intangible item that describes an alignment between a
 * learning resource and a node in an educational framework.
 *
 * Extends: Intangible
 * @see    http://schema.org/AlignmentObject
 */
class AlignmentObject extends Intangible
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'AlignmentObject';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/AlignmentObject';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'An intangible item that describes an alignment between a learning resource and a node in an educational framework.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Intangible';

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * A category of alignment between the learning resource and the framework
     * node. Recommended values include: 'assesses', 'teaches', 'requires',
     * 'textComplexity', 'readingLevel', 'educationalSubject', and
     * 'educationLevel'.
     *
     * @var string [schema.org types: Text]
     */
    public $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     *
     * @var string [schema.org types: Text]
     */
    public $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     *
     * @var string [schema.org types: Text]
     */
    public $targetDescription;

    /**
     * The name of a node in an established educational framework.
     *
     * @var string [schema.org types: Text]
     */
    public $targetName;

    /**
     * The URL of a node in an established educational framework.
     *
     * @var string [schema.org types: URL]
     */
    public $targetUrl;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'alignmentType',
            'educationalFramework',
            'targetDescription',
            'targetName',
            'targetUrl',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'alignmentType' => ['Text'],
            'educationalFramework' => ['Text'],
            'targetDescription' => ['Text'],
            'targetName' => ['Text'],
            'targetUrl' => ['URL'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'alignmentType' => 'A category of alignment between the learning resource and the framework node. Recommended values include: \'assesses\', \'teaches\', \'requires\', \'textComplexity\', \'readingLevel\', \'educationalSubject\', and \'educationLevel\'.',
            'educationalFramework' => 'The framework to which the resource being described is aligned.',
            'targetDescription' => 'The description of a node in an established educational framework.',
            'targetName' => 'The name of a node in an established educational framework.',
            'targetUrl' => 'The URL of a node in an established educational framework.',
        ]);

        self::$googleRequiredSchema = array_merge(parent::$googleRequiredSchema, [
        ]);

        self::$googleRecommendedSchema = array_merge(parent::$googleRecommendedSchema, [
        ]);
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['alignmentType','educationalFramework','targetDescription','targetName','targetUrl',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
