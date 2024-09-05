<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo "Emma's Website"; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emma's resume">
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
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/headshot.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">

					    <div class="row p-2 justify-content-center justify-content-md-between">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo "Emma Hopkins"; ?></h1>
						    <div class="primary-info col-auto">
							    
							    <div class="title mb-3">
                                    <?php echo "Software Developer"; ?>
                                </div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo "Emmanicolehop@gmail.com"; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo "859-468-5263"; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2 pe-5">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo "www.linkedin.com/in/emma-n-hopkins"; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo "EmmaNHop"; ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo "emmaswebsite.com"; ?></a></li>
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
					    <p class="mb-0"><?php echo "Junior Front End Developer with a strong foundation in UX/UI development and expertise in building responsive web designs. Adept at merging design principles with coding proficiency to create engaging and user-centric interfaces. Eager to contribute innovative solutions and cultivate skills in a collaborative development environment."; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Advanced Repair Agent"; ?></h3>
										        <div class="resume-company-name ms-auto">
                                                    <?php echo "Bestbuy - Geek Squad"; ?>    
                                                </div>
										    </div><!--//row-->
										    <div class="resume-position-time">
                                                <?php echo "August 2023 - Present";?>
                                            </div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "Perform diagnostics, repairs, and maintenance on a wide range of devices, consisting of windows and Apple products. Manage between 10 to 40 devices a day, ensuring each Service Order receives the necessary care and attention to detail. Ensure consistent and accurate documentation of customer requests and repairs. Maintains consistent rhythms for timely follow-up and ensures deliverables are met or exceeded. Mentor peers on best practices, service recommendations, and company policies."; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Certifications:</h4>
										    <ul>
                                                <li><?php echo "Apple Mobile Repair"; ?></li>
											    <li><?php echo "Samsung Mobile Repair"; ?></li>
											    
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Skills:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Windows Administration"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "MacOS Administration"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "iOS"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "iPadOS"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Microsoft Services"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Outlook"; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Consultation Agent"; ?> </h3>
										        <div class="resume-company-name ms-auto"><?php echo "Bestbuy - Geek Squad"; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "May 2022 - August 2023"; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "Diagnose client devices, document device issues in detail, reccommend accurate repair plan."; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Skills:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Outlook"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Apple Mail"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Windows Administration"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Hardware Troubleshooting"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Mobile Trouble Shooting"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Microsoft Services"; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "STEM Peer Mentor"; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "Northern Kentucky University"; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "August 2022 - December 2022"; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "Assist first year students with integrating into college life. Provide course assistance to students within the College of Informatics. Organize engagement activities for students in STEM to promote community."; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Skills:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Microsoft Services"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Public Speaking"; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo ""; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo ""; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo ""; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								   
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
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Windows Administration"; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Linux/Unix Administration"; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "MacOS Administration"; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Microsoft Services"; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Hardware Repair"; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Data Structures and Algorithms"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Object Oriented Programming"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Artificial Intelligence"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "iOS"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "iPad OS"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Outlook Troubleshooting"; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Apple Mail Troubleshooting"; ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo "Bachelor's of Science in Computer Science, Minor in Computer Information Technology"; ?></div>
								        <div class="resume-degree-org"><?php echo "Northern Kentucky University"; ?></div>
								        <div class="resume-degree-time"><?php echo "August 2021 - May 2025"; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo "Founders Scholarship"; ?></div>
								        <div class="resume-award-desc"><?php echo "Students can earn scholarships for residing in Kentucky and maintaining a 3.0 GPA"; ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo "KY Education Excellence Scholarship"; ?></div>
								        <div class="resume-award-desc"><?php echo "Students can earn scholarships based on their high school GPA, ACT/SAT scores, and Advanced Placement (AP) test scores"; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li><span class="resume-lang-name font-weight-bold"><?php echo "Java/JavaFX/Kotlin"; ?></span></li>
								    <li><span class="resume-lang-name font-weight-bold"><?php echo "HTML/CSS/JavaScript"; ?></span></li>
                                    <li><span class="resume-lang-name font-weight-bold"><?php echo "Python/C/C++"; ?></span></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo "Reading"; ?></li>
								    <li class="mb-1"><?php echo "Gaming"; ?></li>
								    <li class="mb-1"><?php echo "Hiking"; ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/Headshot2.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Personal Website"; ?></h5>
									<p class="card-text"><?php echo "Designed and built a website out of HTML, CSS, and JavaScript. Utilized responsive web design to build an interactive and functional webpage"; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo "emmaswebsite.com"; ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/Cats.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Pet-Manager"; ?></h5>
									<p class="card-text"><?php echo "Design and build an Android Application using Kotlin. Implement different views in the app. Integrate an API with multiple calls to different data members."; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo "https://github.com/csc-415-spring-24/android-group-project-teen-titans.git"; ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/Orpheus.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Cat Breed App"; ?></h5>
									<p class="card-text"><?php echo "Work with a team to design and build an Android Application using Kotlin. Implement different views in the app. Integrate an API with multiple calls to different data members"; ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo "https://github.com/csc-415-spring-24/class-app-EmmaNHop.git"; ?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo "Emma Hopkins"; ?></small>
    </footer>

</body>
</html> 

