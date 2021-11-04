<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\user_type
 *
 * @property int $id
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|user_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|user_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_type whereType($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @property string|null $gift_time
 * @property string|null $cost
 * @method static \Illuminate\Database\Eloquent\Builder|user_type whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_type whereGiftTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_type whereUserId($value)
 */
class user_type extends Model
{
    use HasFactory;

    protected $table = 'user_type';
    protected $fillable = ['id', 'user_id', 'type', 'gift_time', 'cost'];
    public $timestamps = false;
}
