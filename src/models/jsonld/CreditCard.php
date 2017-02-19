<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\PaymentCard;

/**
 * CreditCard - A card payment method of a particular brand or name. Used to
 * mark up a particular payment method and/or the financial product/service
 * that supplies the card account. Commonly used values:
 * http://purl.org/goodrelations/v1#AmericanExpress
 * http://purl.org/goodrelations/v1#DinersClub
 * http://purl.org/goodrelations/v1#Discover
 * http://purl.org/goodrelations/v1#JCB
 * http://purl.org/goodrelations/v1#MasterCard
 * http://purl.org/goodrelations/v1#VISA
 *
 * Extends: PaymentCard
 * @see    http://schema.org/CreditCard
 */
class CreditCard extends PaymentCard
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'CreditCard';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/CreditCard';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A card payment method of a particular brand or name. Used to mark up a particular payment method and/or the financial product/service that supplies the card account. Commonly used values: http://purl.org/goodrelations/v1#AmericanExpress http://purl.org/goodrelations/v1#DinersClub http://purl.org/goodrelations/v1#Discover http://purl.org/goodrelations/v1#JCB http://purl.org/goodrelations/v1#MasterCard http://purl.org/goodrelations/v1#VISA';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'PaymentCard';

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
     * The annual rate that is charged for borrowing (or made by investing),
     * expressed as a single percentage number that represents the actual yearly
     * cost of funds over the term of a loan. This includes any fees or additional
     * costs associated with the transaction.
     *
     * @var mixed|float|QuantitativeValue [schema.org types: Number, QuantitativeValue]
     */
    public $annualPercentageRate;

    /**
     * Description of fees, commissions, and other terms applied either to a class
     * of financial product, or by a financial service organization.
     *
     * @var mixed|string|string [schema.org types: Text, URL]
     */
    public $feesAndCommissionsSpecification;

    /**
     * The interest rate, charged or paid, applicable to the financial product.
     * Note: This is different from the calculated annualPercentageRate.
     *
     * @var mixed|float|QuantitativeValue [schema.org types: Number, QuantitativeValue]
     */
    public $interestRate;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'annualPercentageRate',
            'feesAndCommissionsSpecification',
            'interestRate',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'annualPercentageRate' => ['Number','QuantitativeValue'],
            'feesAndCommissionsSpecification' => ['Text','URL'],
            'interestRate' => ['Number','QuantitativeValue'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'annualPercentageRate' => 'The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.',
            'feesAndCommissionsSpecification' => 'Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.',
            'interestRate' => 'The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.',
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
            [['annualPercentageRate','feesAndCommissionsSpecification','interestRate',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
