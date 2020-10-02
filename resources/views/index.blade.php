@extends('layout')
@section('contenu')
<title>A-Three</title>

    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">A-Three -  Blog Du Developeur</h2>
			    <div class="intro">Bienvenue sur mon blog. Abonnez-vous et obtenez des motivations dans votre boîte de réception.</div>
                <form class="signup-form form-inline justify-content-center pt-3" action="/" method="post">
                                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="sr-only" for="email">votre email</label>
                        <input type="email" id="email" name="email" class="form-control mr-md-1 email" placeholder="Enter email">
				</div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb1.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Amour-de-soi</h3>
							<div class="intro">Contrairement à la croyance populaire, l’amour-propre n’est pas égoïste. Pratiquer l’amour de soi est important pour stimuler notre estime de soi et notre confiance en nous. C’est l’escapade vers une vie plus brillante et plus heureuse.</div>
							<span _msthash="914161" _msttexthash="1048684">Photo par <a href="https://unsplash.com/@majomaya?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Yan Laurichesse</a> sur <a href="https://unsplash.com/s/photos/amour?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb2.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Nous avons tous des problèmes</h3>
							<div class="intro">Nous avons tous des « problèmes » parce que nous avons tous une histoire. Et peu importe combien de travail vous avez fait sur vous-même, nous avons tous revenir en arrière parfois. Alors sois facile avec toi. La croissance est une danse. Pas un interrupteur.</div>
							<span _msthash="914162" _msttexthash="938886">Photo par <a href="https://unsplash.com/@kellysikkema?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Kelly Sikkema</a> sur <a href="https://unsplash.com/s/photos/problem?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb3.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Je sais où je vais et je sais la vérité</h3>
							<div class="intro">Je sais où je vais et je sais la vérité, et je n’ai pas besoin d’être ce que tu veux que je sois. Je suis libre d’être ce que je veux..</div>
							<span _msthash="914163" _msttexthash="742703">Photo par <a href="https://unsplash.com/@veriret?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">veriret .</a> sur <a href="https://unsplash.com/s/photos/veriret?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb4.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Ne laissez pas les gens se garer dans votre vie</h3>
							<div class="intro">Ne laissez pas les gens se garer dans votre vie pendant qu’ils s’occupent de leur propre merde. Ce sont des gens qui perdent votre temps et empêchent les autres d’entrer. Donnez-leur un avertissement , puis dites-leur de bouger avant de commencer à émettre des billets pour l’espace qu’ils occupent.</div>
							<span _msthash="914164" _msttexthash="986908">Photo par <a href="https://unsplash.com/@nhippert?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Nicolas HIPPERT</a> sur <a href="https://unsplash.com/s/photos/vie?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb5.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Nous ne contrôlons pas toujours ce qui nous arrive</h3>
							<div class="intro">La façon dont vous réagissez aux différentes vagues de la vie indique à quel point vous allez naviguer en douceur.</div>
							<span _msthash="914160" _msttexthash="1000740">Photo par <a href="https://unsplash.com/@timothyeberly?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Timothy Eberly</a> sur <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb6.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1">Cette vie va essayer de vous briser</h3>
							<div class="intro">Cette vie va essayer de vous briser, donc vous devez apprendre à plier. Quand votre monde s’effondrera, faites confiance à votre cœur pour qu’il se répare. Remontez-vous lorsque vous tombez, en tirant des leçons de tout cela. Parfois, le mieux que vous pouvez faire est de grandir ... plus sage de vos blessures..</div>
							<span _msthash="914161" _msttexthash="974935">Photo par <a href="https://unsplash.com/@bechir?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Bechir Kaddech</a> sur <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" _istranslated="1">Unsplash</a></span>					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Précédent<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="/blog-list">Prochain<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
@endsection