<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/1/2017
 * Time: 8:12 PM
 */

namespace App\Controllers;

use App\Core\Container;

class PagesController
{
    public function home()
    {
        return view('index');
    }

}