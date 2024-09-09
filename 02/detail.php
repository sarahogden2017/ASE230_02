<?php
// INSERT DATA HERE.
$i=$_GET['index'];

$team=[
		[
				'name'=>'Sarah Ogden',
				'role'=>'team member',
				'image'=>'assets/images/sarah.jpg',
				'bio'=>'Sarah is a team member who is passionate about coding and design. She is a quick learner and a great team player.',
				'job'=>'Student IT Support Specialist',
				'email'=>'ogdens2@nku.edu',
				'phone'=>'614-593-5929',
				'linkedin'=>'linkedin.com/in/ogden100',
				'github'=>'github.com/sarahogden2017',
				'website'=>'sarahogden2017.github.io',
				'work'=>[       
									[
										'position'=>'Student IT Support Specialist',
										'company'=>'Northern Kentucky University',
										'time'=>'Aug 2024 - Present',
										'description'=>'As a student worker for NKUs server team, I do a variety of tasks to help maintain and improve IT infastructure.',
										'technologies'=>['Windows','Powershell','Cisco Switches']
                  ],
									[
										'position'=>'Threat Operations Intern',
										'company'=>'Kroger',
										'time'=>'May 2024 - Aug 2024',
										'description'=>'At my internship, I learned about detection engineering and developed a variety of scripts to help automate tasks.',
										'technologies'=>['SIEM','SOAR','Python']
                  ],
									[
										'position'=>'Student IT Support Specialist',
										'company'=>'Northern Kentucky University',
										'time'=>'Mar 2024 - May 2024',
										'description'=>'As a student worker for Norse Tech Bar, I helped students with a variety of technical issues.',
										'technologies'=>['Troubleshooting','Windows','WiFi']
                  ],
        ],
				'graded_skills'=>[ // Skill Name and Width for Progress bar
													['Linux',80],
													['Python',95],
													['Java',98],
		    ],
		    'other_skills'=> ['Windows', 'Scripting', 'Research'],
		    'education'=> [
		                		'degree'=>'BS in Cybersecurity and Data Science',
		                		'school'=>'Northern Kentucky University',
		                		'time'=>'2023 - 2027'
		    ],
		    'interests'=>['Hacking', 'Puzzles', 'Horses'],
		    'awards'=> [
		        [ // Award Name and a description
		        'award_name'=>'Dean\'s List Fall 2023',
		        'award_description'=>'4.0 GPA for the semester'
		        ],
            ['award_name'=>'Dean\'s List Spring 2024',
		        'award_description'=>'4.0 GPA for the semester'
		        ]
		    ],
		    'languages'=>[ // similar to skills, language and then level
		            ['English','Fluent (Native)']
		    ],
		    'projects'=>[
											[ 'project_name' => 'CoVCues',
		            				'desc_text' => 'Building a dataset to assist with misinformation detection.',
		            				'link' => "https://github.com/sarahogden2017/Covid-vCues",
												'img' => 'assets/images/covcues.avif'
											],
											[ 'project_name' => 'US Women\'s Cyber Team',
		            				'desc_text' => 'Competing in international cybersecurity competitions.',
		            				'link' => "https://www.uscybergames.com/us-women-cyber-team",
												'img' => 'assets/images/USWCT.webp'
											],
											[ 'project_name'=> 'ASE230 Group Project',
											  'desc_text'=> 'Create this website',
												'link'=> 'https://github.com/sarahogden2017/ASE230_02',
												'img'=> 'assets/images/github.png'
											]
		    ],
		],
	  [
			'name'=>'Kayla Saunders',
			'role'=>'Team Member',
	 		'image'=>'assets/images/Kayla.JPG',
			'bio'=>'Kayla is a team member with a keen interest in safeguarding digital information and systems, aiming to apply technical expertise to enhance security measures and protect against cyber threats.',
			'job'=>'Resident Assistant',
			'email'=>'saundersk1@nku.edu',
			'phone'=>'502-487-7455',
			'linkedin'=>'linkedin.com/in/kayla-saunders',
			'github'=>'github.com/kaylasaun',
			'website'=>'kaylasaunders.com',
			'work'=>[
								[
									'position'=>'Resident Assistant',
									'company'=>'Northern Kentucky University',
									'time'=>'2023 - Present',
									'description'=>'A Resident Assistant (RA) is a student leadership position that allows me to work directly with first-year 
																	and upper-division students. I not only aim to ensure a safe and responsible environment, but also 
	  															intentionally forge connections that construct an engaging housing experience.',
									'technologies'=>['Microsoft Teams','Outlook','THD']
                ],
      ]
		],
    [
			'name'=>'Milo Adams',
			'role'=>'Team Member',
			'image'=>'assets\images\IMG_0439.jpeg',
			'bio'=>'Milo is team member who is creative and analytical. He is a Computer Information Technology student interested in data collection and analyzation.',
			'job'=>'Data Analyst',
      'email'=>'adamsl9@nku.edu',
			'phone'=>'859-307-2864',
			'linkedin'=>'linkedin.com/in/marvelousmiloadams',
			'github' =>'github.com/AdamsM9',
			'website'=>'mywebsite.com',
			'work'=>[       
								[
									'position'=>'Teaching Assistant',
									'company'=>'Northern Kentucky University',
									'time'=>'Fall 2023',
									'description'=>'As a teaching assistant for the Introduction to Linux course, my main performance tasks were focused on completing office hours, 
																	responding timely to students, and improving course content for the next semester. Professor Taylor wanted me, along with the other TAs,
																	to restructure the quizzes to rely more on automated grading than manual grading.',
									'technologies'=>['Canvas Speed Grader','Outlook','Zoom']
                ],
			          [
			            'position'=>'Grading Assistant',
			            'company'=>'Northern Kentucky University',
			            'time'=>'Spring 2024',
			            'description'=>'As a grading assistant, I assisted Emily Taylor with grading student submissions for multiple courses, speeding up the time for students to receive grades and feedback.',
			            'technologies'=>['Canvas Speed Grader','Outlook']
			          ],
      ],
			'graded_skills'=>[ // Skill Name and Width for Progress bar
		                      ['MySQL',80],
		                      ['Python',95],
		                      ['HTML/CSS',98],
		  ],
		  'other_skills'=> ['Technical Writing', 'Scripting', 'Teamwork'],
		  'education'=> [
		              'degree'=>'BS in Computer Information Technology',
		              'school'=>'Northern Kentucky University',
		              'time'=>'2021 - 2025'
		  ],
		  'interests'=>['Rock climbing', 'Drawing', 'Animation'],
		  'awards'=> [
		      [ // Award Name and a description
		      'award_name'=>'Dean\'s List',
		      'award_description'=>' Undergraduate students attempting at least 8 credit hours 
		      during the semester and earning a grade-point average of 3.60 to 3.99.'
		      ],
		  ],
		  'languages'=>[ // similar to skills, language and then level
		          ['English','Fluent (Native)'],
		          ['Spanish', 'Novice']
		  ],
		  'projects'=>[ 
										[
		          				'project_name' => 'INF 286 - Group Project',
		          				'desc_text' => 'Tasked with creating a working website with at least 7 pages.',
		          				'link' => "No link",
											'img' => 'assets/images/github.png'
										]
		  ]
	]
]
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $team[$i]['name'] ?>'s Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $team[$i]['name'].'/s Resume'; ?>>
    <meta name="author" content=<?php echo $team[$i]['name'] ?>>    
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
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $team[$i]['image'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							  <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $team[$i]['name'] ?></h1>
							    <div class="title mb-3"><?= $team[$i]['job']?></div>
							    <ul class="list-unstyled">
								  <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $team[$i]['email'] ?></a></li>
								  <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $team[$i]['github'] ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					        	<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $team[$i]['linkedin'] ?></a></li>
					        	<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $team[$i]['github'] ?></a></li>
					        	<li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $team[$i]['website'] ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					  	<p class="mb-0"><?= $team[$i]['bio'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
                  	<?php for($w=0;$w<count($team[$i]['work']);$w++){ ?>
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= $team[$i]['work'][$w]['position']?></h3>
										        <div class="resume-company-name ms-auto"><?= $team[$i]['work'][$w]['company']?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= $team[$i]['work'][$w]['time']?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= $team[$i]['work'][$w]['description']?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
                          <?php
                          foreach($team[$i]['work'][$w]['technologies'] as $technologies)
                              echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">'.$technologies.'</span></li>';
                          ?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
                    <?php } ?>
							    </div><!--//resume-timeline-->

						    </div>

					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						      <div class="resume-skill-item">
							      <ul class="list-unstyled mb-4">
											<?php foreach($team[$i]['graded_skills'] as $skill)
												echo '<li class="mb-2">
								          <div class="resume-skill-name">'.$skill[0].'</div>
									        	<div class="progress resume-progress">
											    	<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: '.$skill[1].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
								        </li>'
                      ?>
						      <div class="resume-skill-item">
						        <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						        <ul class="list-inline">
                      <?php
                      foreach($team[$i]['other_skills'] as $skills_list)
                          echo '<li class="list-inline-item"><span class="badge badge-light">'.$skills_list.'</span></li>';
                      ?>
                    </ul>
						      </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
										<?php 
    										$education = $team[$i]['education']; 
										?>
										<div class="resume-degree font-weight-bold"><?= $education['degree'] ?></div>
										<div class="resume-degree-org"><?= $education['school'] ?></div>
										<div class="resume-degree-time"><?= $education['time'] ?></div>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
                    <?php for($a=0;$a<count($team[$i]['awards']);$a++){ ?>
								    <li class="mb-2 ps-4 position-relative">
								    	<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                      <div class="resume-award-name"><?=$team[$i]['awards'][$a]['award_name']?></div>
                      <div class="resume-award-desc"><?=$team[$i]['awards'][$a]['award_description']?></div>
								    </li>
                    <?php } ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->

					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
                    <?php foreach($team[$i]['interests'] as $interests)
                        echo '<li class="mb-1">'.$interests.'</li>';
                    ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
					<?php foreach($team[$i]['projects'] as $project) {
						echo '<div class="col-md-4">
										<div class="card">
											<img src='.$project['img'].' alt="Project 1" class="card-img-top">
											<div class="card-body">
												<h5 class="card-title">'.$project['project_name'].'</h5>
												<p class="card-text">'.$project['desc_text'].'</p>
												<a class="btn btn-outline-primary" href="'.$project['link'].'">Go to link</a>
											</div>	
										</div>
									</div>';
						} ?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
      <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $team[0]['name'].', '.$team[1]['name'].', '.$team[2]['name']; ?></small>
    </footer>

    

</body>
</html> 


