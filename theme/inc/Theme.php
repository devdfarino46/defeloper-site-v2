<?php

namespace DefeloperTheme;

use DefeloperTheme\Admin;

class Theme {

    public function __construct()
    {
        new Admin\OptionsPage();

        new Admin\CPT\Cases();
    }
}