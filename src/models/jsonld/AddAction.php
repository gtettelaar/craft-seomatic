<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\UpdateAction;

/**
 * AddAction - The act of editing by adding an object to a collection.
 *
 * Extends: UpdateAction
 * @see    http://schema.org/AddAction
 */
class AddAction extends UpdateAction
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'AddAction';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/AddAction';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'The act of editing by adding an object to a collection.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'UpdateAction';

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
     * A sub property of object. The collection target of the action. Supersedes
     * collection.
     *
     * @var Thing [schema.org types: Thing]
     */
    public $targetCollection;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'targetCollection',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'targetCollection' => ['Thing'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'targetCollection' => 'A sub property of object. The collection target of the action. Supersedes collection.',
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
            [['targetCollection',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
