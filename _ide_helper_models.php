<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Catalog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Categories
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereName($value)
 * @mixin \Eloquentphp artisan ide-helper:meta
 */
	class Categories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $user_type_id
 * @property int $user_role_id
 * @property string|null $favorite_themes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFavoriteThemes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserTypeId($value)
 * @mixin \Eloquent
 * @property string|null $install_themes
 * @property string|null $load_themes
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstallThemes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLoadThemes($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\catalog_download
 *
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_download query()
 * @mixin \Eloquent
 */
	class catalog_download extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\catalog_rating
 *
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|catalog_rating query()
 * @mixin \Eloquent
 */
	class catalog_rating extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\license_type
 *
 * @method static \Illuminate\Database\Eloquent\Builder|license_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|license_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|license_type query()
 * @mixin \Eloquent
 */
	class license_type extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\user_role
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|user_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|user_role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_role whereName($value)
 * @mixin \Eloquent
 */
	class user_role extends \Eloquent {}
}

namespace App\Models{
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
 */
	class user_type extends \Eloquent {}
}

