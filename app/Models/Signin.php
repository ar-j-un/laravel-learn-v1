<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Signin whereUsername($value)
 * @mixin \Eloquent
 */
class Signin extends Model
{
    protected $guarded = [];
}
