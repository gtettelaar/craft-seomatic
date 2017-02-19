<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\InteractAction;

/**
 * SubscribeAction - The act of forming a personal connection with
 * someone/something (object) unidirectionally/asymmetrically to get updates
 * pushed to. Related actions: FollowAction: Unlike FollowAction,
 * SubscribeAction implies that the subscriber acts as a passive agent being
 * constantly/actively pushed for updates. RegisterAction: Unlike
 * RegisterAction, SubscribeAction implies that the agent is interested in
 * continuing receiving updates from the object. JoinAction: Unlike
 * JoinAction, SubscribeAction implies that the agent is interested in
 * continuing receiving updates from the object.
 *
 * Extends: InteractAction
 * @see    http://schema.org/SubscribeAction
 */
class SubscribeAction extends InteractAction
{
    // Static Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'SubscribeAction';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/SubscribeAction';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates pushed to. Related actions: FollowAction: Unlike FollowAction, SubscribeAction implies that the subscriber acts as a passive agent being constantly/actively pushed for updates. RegisterAction: Unlike RegisterAction, SubscribeAction implies that the agent is interested in continuing receiving updates from the object. JoinAction: Unlike JoinAction, SubscribeAction implies that the agent is interested in continuing receiving updates from the object.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'InteractAction';

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
     * Indicates the current disposition of the Action.
     *
     * @var ActionStatusType [schema.org types: ActionStatusType]
     */
    public $actionStatus;

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g.
     * John wrote a book.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $agent;

    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to December. Note that Event uses
     * startDate/endDate instead of startTime/endTime, even when describing dates
     * with times. This situation may be clarified in future revisions.
     *
     * @var mixed|DateTime [schema.org types: DateTime]
     */
    public $endTime;

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @var mixed|Thing [schema.org types: Thing]
     */
    public $error;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book
     * with a pen.
     *
     * @var mixed|Thing [schema.org types: Thing]
     */
    public $instrument;

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @var mixed|Place|PostalAddress|string [schema.org types: Place, PostalAddress, Text]
     */
    public $location;

    /**
     * The object upon the action is carried out, whose state is kept intact or
     * changed. Also known as the semantic roles patient, affected or undergoer
     * (which change their state) or theme (which doesn't). e.g. John read a book.
     *
     * @var mixed|Thing [schema.org types: Thing]
     */
    public $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote
     * a book with Steve.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $participant;

    /**
     * The result produced in the action. e.g. John wrote a book.
     *
     * @var mixed|Thing [schema.org types: Thing]
     */
    public $result;

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to December. Note that Event uses
     * startDate/endDate instead of startTime/endTime, even when describing dates
     * with times. This situation may be clarified in future revisions.
     *
     * @var mixed|DateTime [schema.org types: DateTime]
     */
    public $startTime;

    /**
     * Indicates a target EntryPoint for an Action.
     *
     * @var mixed|EntryPoint [schema.org types: EntryPoint]
     */
    public $target;

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames, [
            'actionStatus',
            'agent',
            'endTime',
            'error',
            'instrument',
            'location',
            'object',
            'participant',
            'result',
            'startTime',
            'target',
        ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes, [
            'actionStatus' => ['ActionStatusType'],
            'agent' => ['Organization','Person'],
            'endTime' => ['DateTime'],
            'error' => ['Thing'],
            'instrument' => ['Thing'],
            'location' => ['Place','PostalAddress','Text'],
            'object' => ['Thing'],
            'participant' => ['Organization','Person'],
            'result' => ['Thing'],
            'startTime' => ['DateTime'],
            'target' => ['EntryPoint'],
        ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions, [
            'actionStatus' => 'Indicates the current disposition of the Action.',
            'agent' => 'The direct performer or driver of the action (animate or inanimate). e.g. John wrote a book.',
            'endTime' => 'The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
            'error' => 'For failed actions, more information on the cause of the failure.',
            'instrument' => 'The object that helped the agent perform the action. e.g. John wrote a book with a pen.',
            'location' => 'The location of for example where the event is happening, an organization is located, or where an action takes place.',
            'object' => 'The object upon the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn\'t). e.g. John read a book.',
            'participant' => 'Other co-agents that participated in the action indirectly. e.g. John wrote a book with Steve.',
            'result' => 'The result produced in the action. e.g. John wrote a book.',
            'startTime' => 'The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to December. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
            'target' => 'Indicates a target EntryPoint for an Action.',
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
            [['actionStatus','agent','endTime','error','instrument','location','object','participant','result','startTime','target',], 'validateJsonSchema'],
        ]);

        return $rules;
    }
}
