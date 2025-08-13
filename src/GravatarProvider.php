<?php

namespace Vblinden\Filament\Gravatar;

use Filament\AvatarProviders\Contracts\AvatarProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class GravatarProvider implements AvatarProvider
{
    public function get(Model|Authenticatable $record): string
    {
        return Gravatar::url($record->email ?? $record->name);
    }
}
