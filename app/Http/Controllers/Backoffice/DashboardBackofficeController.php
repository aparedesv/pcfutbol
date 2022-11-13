<?php

namespace App\Http\Controllers\Backoffice;

class DashboardBackofficeController extends PcfutbolBackofficeController
{

    public function index()
    {
        $data['view'] = config('constants.BACKOFFICE_VIEW_DASHBOARD');

        return view($data['view'].'index', $data);
    }
}
