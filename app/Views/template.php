<?php

if(isset($header)) :
	echo view($header);
endif;
if(isset($sidebar)) :
	echo view($sidebar);
endif;

// if(isset($navbar)) :
// 	$this->load->view($navbar);
// endif;

echo view($content);

if(isset($footer)) :
	echo view($footer);
endif;