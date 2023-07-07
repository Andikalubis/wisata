<?php


function is_logged_in()
{
	$ci = get_instance();
	if(!$ci->session->userdata('email')) {
		redirect('auth');
	} else {
		$role_id = $ci->session->userdata();
		
	}
}

function is_logged_in_admin()
{
	$ci = get_instance();
	if(!$ci->session->userdata('email_admin')) {
		redirect('authadmin');
	} else {
		$role_id = $ci->session->userdata('role_id');
		
	}
}

function is_logged_in_administrator()
{
	$ci = get_instance();
	if(!$ci->session->userdata('email')) {
		redirect('authadmin1');
	} else {
		$role_id = $ci->session->userdata('role_id');
		
	}
}