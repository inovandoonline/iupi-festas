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
 * App\Models\Newsletter
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter whereUpdatedAt($value)
 */
	class Newsletter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pacote
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $image
 * @property string|null $text
 * @property string|null $arquivo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereArquivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pacote whereUpdatedAt($value)
 */
	class Pacote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brinquedo
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Brinquedo whereUpdatedAt($value)
 */
	class Brinquedo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BackpackUser
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BackpackUser whereUpdatedAt($value)
 */
	class BackpackUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contato
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string $text
 * @property string|null $date
 * @property string $refer
 * @property int $lida
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereLida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereRefer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contato whereUpdatedAt($value)
 */
	class Contato extends \Eloquent {}
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
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Evento
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $image
 * @property string $date
 * @property string|null $text
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereUpdatedAt($value)
 */
	class Evento extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tema
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $image
 * @property string $file
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tema whereUpdatedAt($value)
 */
	class Tema extends \Eloquent {}
}

