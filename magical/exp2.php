<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>MAGICAL DB</title>




		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.jpg"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<STYle> 
    
        
			.animate-charcterS {
				text-transform: uppercase;
				background-image: linear-gradient( -225deg, #4ba2ea 0%,#f5af16 29%, #46c5d9 67%, #54cbec 100%);
				background-size: auto auto;
				background-clip: border-box;
				background-size: 50% auto;
				color: #fff;
				background-clip: text;
				text-fill-color: transparent;
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				animation: textclip 7s linear infinite;
				display: inline-block;
				font-size: 300%;
			}
			
			
			
			@keyframes textclip {
				to {
					background-position: 50% center;
				}
			}
			
			.waviy {
				position: relative;
			}
			
			.waviy span {
				position: relative;
				display: inline-block;
				font-size: 40px;
				color: #090909;
				text-transform: uppercase;
				animation: flip 2s infinite;
				animation-delay: calc(.2s * var(--i))
			}
			
			@keyframes flip {
				0%,
				80% {
					transform: rotateY(360deg)
				}
			}
			@import url("https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;600;700&display=swap");
		
			$blue: #2962ff;
			
			* {
			  box-sizing: border-box;
			  margin: 0;
			  padding: 0;
			}
			
			
			
			.new-section {
			  display: flex;
			  flex-direction: column;
			  justify-content: center;
			  align-items: center;
			  
			  font-size: 2em;
			  background: #46c5d9;
			  color: #fff;
			  text-transform: uppercase;
			  gap: 30px;
			
			  h1 {
				font-size: 1em;
			
				@media (max-width: 768px) {
				  font-size: 1.3em;
				}
			  }
			}
			
			.new-text-shadow {
			  font-style: italic;
			  text-transform: uppercase;
			  color: transparent;
			  -webkit-text-stroke: #fff;
			  -webkit-text-stroke-width: 1px;
			  text-shadow: 2px 2px 10px $blue;
			  transition: all 0.5s ease-in-out;
			  text-align: center;
			  letter-spacing: 0.2em;
			  animation: new-flicker 0.5s ease-in-out infinite alternate;
			
			  &:hover {
				color: #fff;
			  }
			}
			
			.new-tags {
			  small {
				@media (max-width: 768px) {
				  font-size: 0.5em;
				}
			  }
			}
			
			@keyframes new-flicker {
			  0% {
				opacity: 0.5;
				text-shadow: 2px 2px 10px $blue;
			  }
			  100% {
				opacity: 1;
				text-shadow: 2px 2px 20px $blue;
			  }
			}
			</STYle>
			<style>
				/* Style for the popup form */
				.popup-form {
					display: none;
					position: fixed;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
					padding: 20px;
					background-color: #f9f9f9;
					border: 1px solid #ccc;
					z-index: 1;
					text-align: center; /* Center the contents */
				}
			
				/* Style for the overlay */
				.overlay {
					display: none;
					position: fixed;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background-color: rgba(0,0,0,0.7);
					z-index: 0;
				}
			
				/* Style for the button */
				button {
					padding: 10px 20px;
					background-color: #4CAF50;
					color: white;
					border: none;
					border-radius: 5px;
					cursor: pointer;
				}
			
				button:hover {
					background-color: #45a049;
				}
			
				/* Style for the submit button */
				.popup-form button {
					margin-top: 15px; /* Add margin to separate from the inputs */
				}
			</style>

			
			
    </head>
	
	<body >
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
			
	<!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area" >
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container" >
						
			            <!-- Start Header Navigation -->
			            <div class="navbar-header" >
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<div >
							<span style="max-width: 300px; 
							height: auto;" class="navbar-brand"><img   src="assets/js/img/logodb.png" alt="" width="80px"></span>
						</div>
	
			                
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="padding-top: 18px;">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="index.html">home</a></li>
			                    
			                    <li ><a href="explore.php">Explore</a></li>
			                    <li ><a href="method.php">Method</a></li>
			                    <li ><a href="download.php">Download</a></li>
								<li class="scroll"><a href="#blog">About</a></li>
			                    <li class="scroll"><a href="#contact">Contact</a></li>
								
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    

		</section>
       <!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero" >
			<div class="container">
				<div class="welcome-hero-txt">
					<br><br><br><br><br>
					<h2>best place to find and explore <br> that all you need </h2>
					<p>
					</p>
				</div>
				<!-- <section class="new-section" style="margin-top: 50px;"><br>
					<h1 class="new-text-shadow"> -- Search Gene Name/Upload List -- </h1>
					<br>
				  </section> -->


			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics" >
			<div class="container"  style="justify-content:center; display:flex;">
				<div class="list-topics-content">
					<ul>
						
						<li>
							<div class="single-list-topics-content" onclick="showPopupForm()">
								<div class="single-list-topics-icon">
									<i class="flaticon-search"></i>
								</div>
								<h2>BROWSE</h2>
								<p>Click here to Browse</p>
							</div>
						</li>
						<li><a href="">
							<div class="single-list-topics-content"  >
								<div class="single-list-topics-icon">
									<i class="material-icons" style="font-size:36px">file_upload</i>
								</div>
								<h2>UPLOAD</h2>
								<p>Click here to Upload</p>
							</div></a>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->
		<div class="popup-form" id="geneForm">
			<form  action="browse.php" method="post">
				<label for="gene1">Gene 1:</label>
				<input type="text" id="gene1" name="gene1" ><br>
		
				<label for="gene2">Gene 2:</label>
				<input type="text" id="gene2" name="gene2" ><br>
		
				<button type="submit">Submit</button>
				<button type="button" onclick="hidePopupForm()">Close</button> <!-- Close button -->

			</form>
		</div>
		<div class="overlay" id="overlay" onclick="hidePopupForm()"></div>


<style>body {
  font-family: 'Helvetica Neue', Arial, sans-serif;
  color: #333;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}

.synthetic-container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #f8f8f8;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.synthetic-title {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #333;
}

.synthetic-section {
  font-size: 24px;
  font-weight: bold;
  margin-top: 20px;
  color: #0066cc; /* Dark blue color for section headings */
}

.synthetic-content {
  font-size: 16px;
  margin-bottom: 15px;
}

.synthetic-conclusion {
  font-style: italic;
  color: #009900; /* Dark green color for conclusions */
}
</style>
		  
		
  <!-- about -->

	

  

  <div class="synthetic-container">
  <div class="synthetic-title">Understanding Synthetic Lethality in Genetics and Cancer Research</div>

  <div class="synthetic-section">Introduction:</div>
  <div class="synthetic-content">
    An American geneticist, Calvin Bridges, first described the phenomenon of synthetic lethality in the early 20th century, particularly in Drosophila melanogaster. Later, Theodore Dobzhansky extended this observation to Drosophila pseudoobscura, coining the term "synthetic lethality." This concept has since found applications in cancer research, revolutionizing personalized medicine.
  </div>

  <div class="synthetic-section">Synthetic Lethality in Genetics:</div>
  <div class="synthetic-content">
    Observations: Bridges noted non-allelic genes in Drosophila melanogaster that were lethal in combination but allowed homozygous parents to survive. Terminology: "Synthetic" refers to the fusion of two units to create something new.
  </div>

  <div class="synthetic-section">Application in Cancer Research:</div>
  <div class="synthetic-content">
    Definition: Synthetic lethality (SL) in cancer research refers to a genetic interaction where inhibiting either of two genes does not affect cell survival individually. However, inhibiting both genes results in cell lethality. Additional Concept: Synthetic viability (SV) is a related genetic interaction where inhibiting one gene makes the cell sick, but inhibiting the partner gene rescues the effect, leading to cell viability. Clinical Implications: SLs aid in personalized medicine by utilizing transcriptomic profiles to identify new selective drug targets. SVs help anticipate drug resistance in cancer patients.
  </div>

  <div class="synthetic-section">Significance of Large-Scale Tumor Data:</div>
  <div class="synthetic-content">
    Potential Achievements: Large-scale tumor data enables advanced analysis of genetic interactions. Model Development: The introduction of a multi-classifier model allows the identification of different classes of genetic interactions and predicts whether a gene pair constitutes a genetic interaction.
  </div>

  <div class="synthetic-section">Novelty and Uniqueness:</div>
  <div class="synthetic-content">
    Study Innovation: The application of a multi-class model for predicting genetic interactions is novel and unique. Model Accuracy: The developed model outperforms other classifiers, showcasing its effectiveness in predicting genetic interactions.
  </div>

  <div class="synthetic-section">Conclusion:</div>
  <div class="synthetic-content synthetic-conclusion">
    Understanding synthetic lethality opens avenues for advanced personalized medicine in cancer treatment. The novel multi-classifier model enhances our ability to predict genetic interactions accurately, contributing to the ongoing progress in cancer research.
  </div>
</div>
  
		<!-- <style>:root {
			--csdw-color-primary: hsl(310, 100%, 65%);
			--csdw-color-secondary: hsl(160, 100%, 65%);
			--csdw-background: hsl(231, 12%, 22%);
			--csdw-text: hsl(309, 84%, 7%);
		  }
		  
		  ::selection {
			background-color: var(--csdw-color-primary);
			color: var(--csdw-background);
			-webkit-text-fill-color: var(--csdw-background);
		  }
		  
		  * {
			box-sizing: border-box;
		  }
		  
		  .csdw-h1 {
			color: var(--csdw-color-primary);
		  }
		  
		  .csdw-blockquote {
			border-left: 5px solid;
			margin-left: 0;
			padding: 1rem 0 1rem 2rem;
			font-size: 20px;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-image: linear-gradient(
			  35deg,
			  var(--csdw-color-primary),
			  var(--csdw-color-secondary)
			);
		  
			p {
			  margin: 0;
			}
		  }
		  
		  </style>
		  <div class="csdw-container" style="display: grid;
		
		  place-content: center;
		  border-radius: 30px;
		  min-height: 100vh;
		  padding: 20px;
		  margin: 80px;
		  font-size: 1.5rem;
		  line-height: 1.5;
		  color: var(--csdw-text); ">
		  
		
		  
			Welcome To CSDCOURSEWARE
		  
		
		  <div class="csdw-blockquote">
		   
			  Our  gateway to convenient and accessible educational resources.<br></br> Our platform is designed to serve both administrators and engineering college students.
			
		  </div>
		
		   Key Features Of COURSEWARE
		
		  <div class="csdw-blockquote">
			
			  It offers a user-friendly interface that allows administrators to easily upload materials.<br></br>
			  It provides secure and organized storage for notes and syllabi.<br></br>
			  It ensures easy access for students.<br></br>
			  CSDCOURSEWARE is specifically designed to deliver educational content to learners.
			
		  </div>
		
		 Benefits For Administrators
		 
		
		  <div class="csdw-blockquote">
		   
			  It facilitates efficient content management and distribution of materials.
			
		  </div>
		   Benefits For Students
		  
		
		  <div class="csdw-blockquote">
			Students enjoy 24/7 access to study materials.<br></br>
			  They no longer miss out on important notes or syllabi.<br></br>
			  The platform enhances the study experience by providing easy access to materials.
		   
		  </div> 
		   Future Developments
		  
		
		  <div class="csdw-blockquote">
			
			  We have plans to extend the availability of CSD COURSEWARE to the entire college.
		   
		  </div>
		</div> -->

		

		<!--works start -->
		<!-- <section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>how it works</h2>
					<p>Learn More about how our website works
		

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div>/.scroll-Top
			
        </footer><!--/.footer-->
		<!--footer end--><script>
    function showPopupForm() {
        // Show the popup form and overlay
        document.getElementById('geneForm').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function hidePopupForm() {
        // Hide the popup form and overlay
        document.getElementById('geneForm').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    function submitForm() {
        // Perform any additional actions on form submission
        // For example, you can send the data to a server using AJAX

        // Hide the popup form and overlay
        hidePopupForm();
    }
</script>
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>