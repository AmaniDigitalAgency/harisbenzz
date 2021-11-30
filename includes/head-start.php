<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?=$url;?>">
	<title><? if(isset($pageTitle)){ echo $pageTitle;}else{ echo activePage()==='index'?'Home':ucwords(str_ireplace('-',' ',activePage()));}?> | Harisbenzz International</title>
	<link rel="icon" href="<?=$url;?>images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?=$url;?>css/font-awesome.min.css" />
	
	
	
	
	
	