<?php

	//$salt = "pofn3j2948f84j00fj29fjdlvh";

	//echo md5($salt."Blackey1105");

	/*	
		Use this technique below to create a unique salt for each user
		based on some unique information about the user like their row id 
		or their email address possibly
	*/
	
	echo md5(md5($row["id"])."password");
	echo md5(md5($row["email"])."password");
	
?>