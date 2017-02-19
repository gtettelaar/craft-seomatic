<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Place;

/**
 * Accommodation - An accommodation is a place that can accommodate human
 * beings, e.g. a hotel room, a camping pitch, or a meeting room. Many
 * accommodations are for overnight stays, but this is not a mandatory
 * requirement. For more specific types of accommodations not defined in
 * schema.org, one can use additionalType with external vocabularies. See also
 * the dedicated document on the use of schema.org for marking up hotels and
 * other forms of accommodations.
 *
 * Extends: Place
 * @see    http://schema.org/Accommodation
 */
class Accommodation extends Place
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'Accommodation';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/Accommodation';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement. For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Place';

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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation.
     * This generic property does not make a statement about whether the feature
     * is included in an offer for the main accommodation or available at extra
     * costs.
     *
     * @var LocationFeatureSpecification [schema.org types: LocationFeatureSpecification]
     */
    public $amenityFeature;

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical
     * unit code(s): MTK for square meter, FTK for square foot, or YDK for square
     * yard
     *
     * @var QuantitativeValue [schema.org types: QuantitativeValue]
     */
    public $floorSize;

    /**
     * The number of rooms (excluding bathrooms and closets) of the acccommodation
     * or lodging business. Typical unit code(s): ROM for room or C62 for no unit.
     * The type of room can be put in the unitText property of the
     * QuantitativeValue.
     *
     * @var mixed|float|QuantitativeValue [schema.org types: Number, QuantitativeValue]
     */
    public $numberOfRooms;

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $permittedUsage;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var mixed|bool|string [schema.org types: Boolean, Text]
     */
    public $petsAllowed;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'amenityFeature',
            'floorSize',
            'numberOfRooms',
            'permittedUsage',
            'petsAllowed',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'amenityFeature' => ['LocationFeatureSpecification'],
            'floorSize' => ['QuantitativeValue'],
            'numberOfRooms' => ['Number','QuantitativeValue'],
            'permittedUsage' => ['Text'],
            'petsAllowed' => ['Boolean','Text'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'amenityFeature' => 'An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.',
            'floorSize' => 'The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard',
            'numberOfRooms' => 'The number of rooms (excluding bathrooms and closets) of the acccommodation or lodging business. Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.',
            'permittedUsage' => 'Indications regarding the permitted usage of the accommodation.',
            'petsAllowed' => 'Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.',
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
            [['amenityFeature','floorSize','numberOfRooms','permittedUsage','petsAllowed',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
