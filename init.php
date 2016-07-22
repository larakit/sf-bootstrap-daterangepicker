<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 23.05.16
 * Time: 10:02
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-daterangepicker')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-jquery')
    ->usePackage('larakit/sf-momentjs')
    ->cssPackage('daterangepicker.css')
    ->jsPackage('daterangepicker.js')
    ->jsPackage('init.js');