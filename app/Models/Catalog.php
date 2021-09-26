<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Catalog
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $preview
 * @property string|null $images
 * @property int $category_id
 * @property int $license_type_id
 * @property int $user_id
 * @property int $catalog_download_id
 * @property int $catalog_rating_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCatalogDownloadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCatalogRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereLicenseTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog wherePreview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereUserId($value)
 * @mixin \Eloquent
 */
class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalog';
    protected $fillable = ['id' , 'name', 'description', 'preview', 'images', 'category_id', 'license_type_id', 'user_id', 'catalog_download_id', 'catalog_rating_id'];
}
