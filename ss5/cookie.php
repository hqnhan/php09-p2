<?php
	//create cookie
	setcookie("name","Ho Quy Nhan",time() + (3), "/");
	// call and use cookie
	echo $_COOKIE['name'];
	//delete cookie
		//setcookie("name","",time() - 3600, "/");
	/*
	Tao cookie khi click vao nut mua hang.
	Su dung cookie khi vao gio hang va su dung nut thanh toan.
	Xoa cookie khi thao tac thanh toan hoan thanh.
	*/
?>