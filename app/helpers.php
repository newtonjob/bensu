<?php

use App\Models\Setting;
use App\Models\User;
use App\Support\Cart;
use Cloudinary\Configuration\Configuration;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Cloudinary\Asset\Image;
use Illuminate\Support\Facades\Date;

/**
 * @param  null  $key
 * @return Authenticatable|User|null
 */
function user($key = null)
{
    $user = Auth::user();

    return $key ? $user?->{$key} : $user;
}

/**
 * @param  null  $key
 * @return Setting|mixed
 */
function site($key = null)
{
    $setting = app(Setting::class);

    return $key ? $setting?->{$key} : $setting;
}

/**
 * @param $value
 * @param  array  $transformation
 * @param  bool  $bg_auto
 * @return string
 */
function cloudinary_url($value, $transformation = [], $bg_auto = false)
{
    if (! is_array($transformation)) {
        $transformation = ['width' => $transformation];
    }

    if ($bg_auto) {
        $transformation = array_merge($transformation, [
            "height"     => $transformation['width'],
            "crop"       => "pad",
            "background" => "auto"
        ]);
    }

    Configuration::instance(config('cloudinary.cloud_url'));

    return (string) Image::fromParams($value, ["transformation" => [$transformation]]);
}

/**
 * Generates a QR Code image src for the given data.
 */
function qr($data, $width = 120): string
{
    return "https://chart.googleapis.com/chart?cht=qr&chl={$data}&chs={$width}x{$width}&choe=UTF-8&chld=L|0";
}

/**
 * Create a new Carbon instance for tomorrow's date.
 *
 * @param  DateTimeZone|string|null  $tz
 * @return Carbon
 */
function tomorrow($tz = null)
{
    return Date::tomorrow($tz);
}

/**
 * Create a new Carbon instance for yesterday's date.
 *
 * @param  DateTimeZone|string|null  $tz
 * @return Carbon
 */
function yesterday($tz = null)
{
    return Date::yesterday($tz);
}

/**
 * Get the cart singleton instance from the service container.
 *
 * @return Cart
 */
function cart()
{
    return app(Cart::class);
}
