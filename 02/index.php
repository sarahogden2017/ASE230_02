<?php
// INSERT DATA HERE.
$team=[
    [
        'name'=>'Sarah Ogden',
        'role'=>'team member',
        'image'=>'assets/images/sarah.jpg',
    ],
    [
	'name'=>'Kayla Saunders',
	'role'=>'team member',
	'image'=>'assets/images/Kayla\'s Pic',
    ]
    [
	'name'=>'Milo Adams',
	'role'=>'team member',
	'image'=>'assets\images\IMG_0439.jpeg'
    ]
];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>

    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
            <?php for($i=0;$i<count($team);$i++) { ?>
		    <header class="resume-header pt-4 pt-md-0">
            	<div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
    				    <img class="picture" src=<?= $team[$i]['image'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $team[$i]['name'] ?></h1>
							    <div class="title mb-3"><?= $team[$i]['role'] ?></div>
								<a href="detail.php?index=<?= $i ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row--> 
				    </div><!--//col-->
			    </div><!--//row-->
           	</header> 
            <?php } ?>
