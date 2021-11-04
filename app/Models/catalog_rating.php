<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\catalog_rating
 *
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $bestRating
 * @property string $worstRating
 * @property string $ratingValue
 * @property string $ratingCount
 * @property string $reviewCount
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereBestRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereRatingCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereRatingValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereReviewCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereWorstRating($value)
 * @property int $catalog_id
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating whereCatalogId($value)
 */
class catalog_rating extends Model
{
    use HasFactory;
    //id	bestRating	worstRating	ratingValue	ratingCount	reviewCount
    protected $table = 'catalog_rating';
    protected $fillable = ['id', 'bestRating', 'worstRating', 'ratingValue', 'ratingCount', 'reviewCount'];
    public $timestamps = false;
}
