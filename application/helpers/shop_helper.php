<?php

function checkRes($query) {
	if ($query->num_rows() > 0) {
		 return $query->result();
	} else {
		return false;
	}
}
function define_sess($customer_id, $first_name,$last_name,$email) {
	$ci = & get_instance();
	$newdata = array( 'customer_id' => $customer_id, 'first_name' => $first_name, 'last_name' => $last_name, 'email' => $email,'logged_in' => TRUE );
	$ci->session->set_userdata($newdata);
}
