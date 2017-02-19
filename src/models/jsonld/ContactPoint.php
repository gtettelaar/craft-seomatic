<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\StructuredValue;

/**
 * ContactPoint - A contact point—for example, a Customer Complaints
 * department.
 *
 * Extends: StructuredValue
 * @see    http://schema.org/ContactPoint
 */
class ContactPoint extends StructuredValue
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'ContactPoint';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/ContactPoint';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A contact point—for example, a Customer Complaints department.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'StructuredValue';

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
     * The geographic area where a service or offered item is provided. Supersedes
     * serviceArea.
     *
     * @var mixed|AdministrativeArea|GeoShape|Place|string [schema.org types: AdministrativeArea, GeoShape, Place, Text]
     */
    public $areaServed;

    /**
     * A language someone may use with the item. Please use one of the language
     * codes from the IETF BCP 47 standard. See also inLanguage
     *
     * @var mixed|Language|string [schema.org types: Language, Text]
     */
    public $availableLanguage;

    /**
     * An option available on this contact point (e.g. a toll-free number or
     * support for hearing-impaired callers).
     *
     * @var mixed|ContactPointOption [schema.org types: ContactPointOption]
     */
    public $contactOption;

    /**
     * A person or organization can have different contact points, for different
     * purposes. For example, a sales contact point, a PR contact point and so on.
     * This property is used to specify the kind of contact point.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $contactType;

    /**
     * Email address.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $email;

    /**
     * The fax number.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $faxNumber;

    /**
     * The hours during which this service or contact is available.
     *
     * @var mixed|OpeningHoursSpecification [schema.org types: OpeningHoursSpecification]
     */
    public $hoursAvailable;

    /**
     * The product or service this support contact point is related to (such as
     * product support for a particular product line). This can be a specific
     * product or product line (e.g. "iPhone") or a general category of products
     * or services (e.g. "smartphones").
     *
     * @var mixed|Product|string [schema.org types: Product, Text]
     */
    public $productSupported;

    /**
     * The telephone number.
     *
     * @var mixed|string [schema.org types: Text]
     */
    public $telephone;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'areaServed',
            'availableLanguage',
            'contactOption',
            'contactType',
            'email',
            'faxNumber',
            'hoursAvailable',
            'productSupported',
            'telephone',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'areaServed' => ['AdministrativeArea','GeoShape','Place','Text'],
            'availableLanguage' => ['Language','Text'],
            'contactOption' => ['ContactPointOption'],
            'contactType' => ['Text'],
            'email' => ['Text'],
            'faxNumber' => ['Text'],
            'hoursAvailable' => ['OpeningHoursSpecification'],
            'productSupported' => ['Product','Text'],
            'telephone' => ['Text'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'areaServed' => 'The geographic area where a service or offered item is provided. Supersedes serviceArea.',
            'availableLanguage' => 'A language someone may use with the item. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage',
            'contactOption' => 'An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).',
            'contactType' => 'A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.',
            'email' => 'Email address.',
            'faxNumber' => 'The fax number.',
            'hoursAvailable' => 'The hours during which this service or contact is available.',
            'productSupported' => 'The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").',
            'telephone' => 'The telephone number.',
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
            [['areaServed','availableLanguage','contactOption','contactType','email','faxNumber','hoursAvailable','productSupported','telephone',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
