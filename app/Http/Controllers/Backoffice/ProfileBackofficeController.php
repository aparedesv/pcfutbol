<?php

namespace App\Http\Controllers\Backoffice;

class ProfileBackofficeController extends PcfutbolBackofficeController
{

    public function index()
    {
        $data['buttons'] = [

            (object)[
                'icon' => '<i class="bi bi-plus"></i>',
                'content' => 'Ciutat',
                'type' => 'button',
                'style' => 'btn-primary',
                'size' => null,
            ]
        ];

        $data['view'] = config('constants.BACKOFFICE_VIEW_PROFILE');

        return view($data['view'].'index', $data);
    }
}
