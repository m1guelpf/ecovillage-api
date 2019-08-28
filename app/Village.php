<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'slug';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
            'cellphone_service' => 'boolean',
            'internet' => 'boolean',
            'community_farm_garden' => 'boolean',
            'gym_sports_facilities' => 'boolean',
            'large_scale_kitchen' => 'boolean',
            'library' => 'boolean',
            'play_areas' => 'boolean',
            'swimming_pond_pool' => 'boolean',
            'natural' => 'boolean',
            'green' => 'boolean',
            'languages' => 'json',
            'income_sharing' => 'boolean',
            'self_governance' => 'boolean',
            'urban' => 'boolean',
            'semi_urban' => 'boolean',
            'rural' => 'boolean',
            'mobile' => 'boolean',
            'cohousing' => 'boolean',
            'shared_housing' => 'boolean',
            'building_lots' => 'boolean',
            'camping' => 'boolean',
            'visitors' => 'boolean',
            'new_members' => 'boolean',
            'volunteers' => 'boolean',
            'self_or_shared_food_production' => 'boolean',
            'renewable_energy' => 'boolean',
            'education' => 'boolean',
            'research' => 'boolean',
            'art' => 'boolean',
            'spiritual' => 'boolean',
            'religious' => 'boolean',
            'forming' => 'boolean',
            'established' => 'boolean',
            'disbanded' => 'boolean',
            'fic_member' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['_links'];

    public function getLinksAttribute()
    {
        return [
            'show' => route('villages.show', $this),
        ];
    }
}
