<?php

namespace App\Traits;


trait SettingTrait
{

    public function scopeSetting($query, $name)
    {
        if (str_contains($name, ".")) {
            $item_array = explode(".", $name);
            $setting = $query->whereName($item_array[0])->first();
            if ($setting->value == null) return null;
            $item_value = (object) $setting->value;
            return $item_value->{$item_array[1]};
        } else {
            $setting = $query->whereName($name)->first();
            if ($setting->value == null) return null;
            return (object) $setting->value;
        }
    }

    public function scopeSet($query, $name, $value)
    {
        return $query->updateOrCreate(
            ['name' => $name],
            ['value' => $value]
        );
    }
}
