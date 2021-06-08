<?php

namespace App\Http\Livewire;
use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LastWordTable extends LivewireDatatable
{
    public function builder()
    {
       return User::query();
    }

    public function columns()
    {
       return [
            NumberColumn::name('id')
                ->label('ID')
                ->filterable(),

            NumberColumn::name('full_name')
                ->filterable()
                ->label('Student Name'),

        ];
    }
}