@extends('layout')
@section('contenu')
<title>Blog</title>
	    <div class="main-wrapper">
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2 text-center">Exprimez-Vous sur A-Three</h2>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="/welcome"><img class="img-fluid" src="assets/images/blog/blog-post-banner1.jpg" alt="image"></a>
				        <figcaption class="mt-2 text-center mb-2 image-caption"><span _msthash="914160" _msttexthash="752713">Photo par <a  _istranslated="1">Blanchard Beugre</a> sur <a _istranslated="1">PixelLab</a></span></figcaption>
				    </figure>
					<div class="h4 mb-2 text-center">A-Three vous donne l'occasion de vous Exprimez donc saisissez là, en 
				    laissez un commentaire ou une citation au passage!! </div>
					
					
					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-0">je pense a certaine personne lorsque je suis au toilette.</p>
						<footer class="blockquote-footer">Code source</footer>
					</blockquote>

					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-0">Aveugle ne vas pas au cinéma.</p>
						<footer class="blockquote-footer">Hington Code</footer>
					</blockquote>

					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-0">Rien n’est illégal si personne n’est au courant.</p>
						<footer class="blockquote-footer">Hington Code</footer>
					</blockquote>
					
			
					<div class="mx-3 px-3">
						
					<!-- mon vue js -->
					<div id="app">
						
						<comments></comments>
        			</div>
        				<script src="/js/app.js"></script> 
					<!--fin vue js -->

				
					</div>
					<!--<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div>//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Style dans le Code</h2>
			    <p>Des t-shirts unisexes de premiére qualité, Superbe qualité. Coupe classique. Commander en cliquant sur l'image</p>
                <figure class="promo-figure">
			        <a href="/welcome" target="_blank"><img class="img-fluid" src="assets/images/promo-banner1.png" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->
 @endsection