@extends('layout')
@section('contenu')
<title>A-Propos</title>
<div class="main-wrapper">
	    <article class="about-section py-5">
		    <div class="container">
				<h2 class="title mb-3">A-propos </h2>
				<span class="border-l-2 pl-2 ml-3">L’argent n’est pas le médicament contre la mort!!!!</span><p class="border-l-2 pl-2 ml-3"> L’instruction dans la jeunesse est comme la gravure dans la pierre. Elle serait après mais nous la gagnerons sans aucun doute .</p>
						
				<blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr">Les personnes bilingues peuvent inconsciemment changer de personnalité quand elles passent d’une langue à l’autre <a href="https://twitter.com/SavoirDuMonde/status/1307804363256143874"></a></blockquote>
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>

		<div class="mx-3 px-3">
			<h1 style="font-size: medium;"><strong>Poser des Questions</strong></h1>
		<hr class="bg-light">	

				<!-- mon vue js -->
				<div id="app">
					<comments></comments>
        						</div>
        				<script src="/js/app.js"></script> 
				</div><!--fin vue js -->
				</div>
		</article><!--//about-section-->

		<section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Style dans le Code</h2>
			    <p>Des t-shirts unisexes de premiére qualité, Superbe qualité. Coupe classique</p>
                <figure class="promo-figure">
				<a href="/welcome" target="_blank"><img class="img-fluid" src="assets/images/promo-banner1.png" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->

		
	    
@endsection