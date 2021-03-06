<!DOCTYPE html>
<html lang="en"> 
<head>
    
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon"  href="assets/images/icon.png"> 

    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Blog de Blanchard</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle " src="assets/images/profile1.jpg" alt="image">			
					
					<div class="bio mb-3">Salut, je m’appelle Blanchard Beugre. L'inconnu est le "Yin", l'étrange est le "Yang". l'étrange est l'inconnu <strong>[L'Uvcien développeur!!]</strong>. Pour en savoir d'avantage il faudra pose des questions ici <i class="fas fa-thumbs-up fa-2x"></i> <br><a href="/about"> En savoir plus sur moi</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="https://twitter.com/BeugreHard" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.instagram.com/blanc_hard.225/" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/Hington" target="_blank"><i class="fab fa-github-alt fa-fw" ></i></a>
			            <li class="list-inline-item"><a href="https://www.facebook.com/blanc.hard.3386/" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
			            
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="/"><i class="fas fa-home fa-fw mr-2"></i>Accueil Blog <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" href="/blog-post"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog</a>
					</li>
					<li class="nav-item active">
					    <a class="nav-link" href="/about"><i class="fas fa-user fa-fw mr-2"></i>A propos de moi</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://wa.me/+22578587708" target="_blank"><i class="fab fa-whatsapp fa-fw"></i>Entrez en contact</a>
				</div>
			</div>
		</nav>
    </header>

    @yield('contenu')

    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Conçu avec <i class="fas fa-heart" style="color: #fb866a;"></i> par <a href="/welcome" target="_blank">Hington Code</a> pour Vous</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>  

    <style>
    	
    	hr.two{
    		height: 5px;
    		border:none;
    		border-radius: 10px;
    		background: linear-gradient(to left, blue, red);
    	}
    </style>   
    

</body>
</html> 

