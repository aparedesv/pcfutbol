<?php

namespace App\Http\Controllers\Web;

class HomeWebController extends PcfutbolWebController
{

    public function index()
    {
        $data['view'] = config('constants.WEB_VIEW_HOME');

        return view($data['view'].'index', $data);
    }
}
