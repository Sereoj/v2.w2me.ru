<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\user_photo
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_photo whereUserId($value)
 * @mixin \Eloquent
 */
class user_photo extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "user_photo";
    protected $fillable = ['id','user_id','path'];
}
