<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rara_Business
 */
    
    /**
     * After Content
     * 
     * @hooked rara_business_content_end - 20
    */
    do_action( 'rara_business_before_footer' );
    
    /**
     * Footer
     * 
     * @hooked rara_business_footer_start  - 20
     * @hooked rara_business_footer_top    - 30
     * @hooked rara_business_footer_bottom - 40
     * @hooked rara_business_footer_end    - 50
    */
    do_action( 'rara_business_footer' );
    
    /**
     * After Footer
     * 
     * @hooked rara_business_page_end    - 20
    */
    do_action( 'rara_business_after_footer' );
    
    wp_footer(); ?>

	<!-- Floating Action Buttons -->
	<div class="container-fab">
	  <a id="waButton"
		 href="https://wa.me/6281234567890?text=Halo%20Admin%2C%20Saya%20ingin%20menanyakan%20beberapa%20informasi%20lebih%20lanjut%20terkait%20layanan%20yang%20tersedia.%20Terima%20kasih." 
		 target="_blank" 
		 rel="noopener"
		 aria-label="WhatsApp">
		<i class="fa-brands fa-whatsapp"></i>
	  </a>

	  <a href="#" id="btnToTop" aria-label="Back to Top">
		<i class="fa-solid fa-chevron-up"></i>
	  </a>
	</div>

	<script>
	document.addEventListener("DOMContentLoaded", function () {
	  const wrapper = document.querySelector(".container-fab");
	  const btnToTop = document.getElementById("btnToTop");

	  window.addEventListener("scroll", function () {
		wrapper.classList.toggle("show-to-top", window.scrollY > 300);
	  });

	  btnToTop.addEventListener("click", function (e) {
		e.preventDefault();
		window.scrollTo({
		  top: 0,
		  behavior: "smooth"
		});
	  });
	});
	</script>
</body>
</html>
