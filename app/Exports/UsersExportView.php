<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExportView implements FromView
{
    /**
     * @return View
     */
    public function view(): View
    {
        // TODO: Implement view() method.
        return view(
            'exports.users', [
                'users' =>User::all()
            ]
        );
    }
}
