<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('email', 'session', 'database','form_validation');


$autoload['drivers'] = array();


$autoload['helper'] = array('url', 'file', 'security', 'form');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('AdminWisata_model', 'Admin_model', 'Wisatawan_model');
