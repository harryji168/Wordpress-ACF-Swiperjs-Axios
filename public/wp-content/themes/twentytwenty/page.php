<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		// $i = 0;

		// while ( have_posts() ) {
		// 	$i++;
		// 	if ( $i > 1 ) {
		// 		echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
		// 	}
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// }
        // vars
              
?>
        <!-- Link Swiper's CSS -->
        <link
          rel="stylesheet"
          href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
    
        <!-- Demo styles -->
        <style>
          html,
          body {
            position: relative;
            height: 100%;
          }
    
          body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
          }
    
          .swiper {
            width: 100%;
            height: 100%;
          }
    
          .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
    
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
          }
    
          .swiper-slide img {
            display: block;
            width: 100%;
            height: 380px;
            object-fit: cover;
          }
          /* Slide captions */
            .slide-captions {
                position: absolute;
                top: 80%;
                left: 30%;
                color: #FFF;
                z-index: 999;
                transform: translateY(-50%);
                font-size: x-large;
            }
            .slide-captions .current-title {
                font-size: 48px;
            }
            .slide-captions .current-subtitle {
                font-size: 28px;
            }
        </style>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo get_field('image_1'); ?>"></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image_2'); ?>"></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image_3'); ?>"></div>
        <div class="swiper-slide"><img src="<?php echo get_field('image_4'); ?>"></div>       
      </div>

      
      <div class="slide-captions"> <?php echo get_field('quote'); ?><br>
        <?php echo get_field('title'); ?> <?php echo get_field('name'); ?> <?php echo get_field('company'); ?></div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="wrap">	
        <div style="text-align: center;"><p>Price : <?php echo get_field('price'); ?><br> 
            Medium: <?php echo get_field('medium'); ?><br> 
            Stylized(for Sale?): <?php echo get_field('stylized');?> 
            </p>
            <Button onclick="fetch_more()" id="fetch_more" >Fetch More Slides</Button>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <script >
      var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },

            navigation : {
                nextEl : '.swiper-button-next',
                prevEl : '.swiper-button-prev',
            },
            slidesPerView : 'auto',
            loop : true,
            spaceBetween : 34
      });
      function fetch_more() {
         document.getElementById("fetch_more").innerHTML = "Loading...";
         let randomURL = 'https://source.unsplash.com/random/400x300';
        //Good
        //  axios.get(randomURL).then( data => {
        //         // the url of the random img
        //         console.log(data.request.responseURL);   
        //         document.getElementById("fetch_more").innerHTML = "Fetch More Slides";
        //  });
         const sendGetRequest = async () => {
            try { 
                axios.get(randomURL).then( data => {
                // the url of the random img
                console.log(data.request.responseURL);   
                document.getElementById("fetch_more").innerHTML = "Fetch More Slides";
               });
            } catch (err) {
                // Handle Error Here
                console.error(err);
            }
        };  
        sendGetRequest();   
        
     }
    </script>





        <?php 


	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>
 

</main><!-- #site-content -->
 

<?php
get_footer();
