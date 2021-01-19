<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);
$cfg['blowfish_secret'] = 'NNmD9FAvIIeyXRjEtphchhdcWfi{Bz4}'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'mysql';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';
$cfg['Servers'][$i]['compress'] = false;

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';