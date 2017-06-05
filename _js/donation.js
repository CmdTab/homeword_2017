function autoAddCart() {
    jQuery('.wcopc .single_add_to_cart_button, .opc-complete-order').click(function() {
        jQuery('body').addClass('show-checkout');
        jQuery('#customer_details, .review-order-container, #wc_checkout_add_ons, .custom-addon-value').slideDown();
        jQuery('#opc-messages').hide();
        jQuery(window).resize();
    });
}

function loadingModal () {
	var loading = '<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve"> <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50"><animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" /></path></svg>';
	jQuery('.switch-donation').click(function () {
		/*jQuery('.modalContent').html(loading);*/
		jQuery('.hideModal').css('display', 'none');
		jQuery('.modalVideo').addClass('showModal');
	});
}

function cartDonation() {
	jQuery('.cart-donation .variations input[name="attribute_suggested-amounts"]').change(function() {
		if(jQuery(this).val() == 'Other') {
			jQuery('.cart-donation .nyp').slideDown();
		} else if(jQuery(this).val() == 'Custom') {
			jQuery('.cart-donation .nyp').slideDown();
		} else {
			jQuery('.cart-donation .nyp').slideUp();
		}
	});
}
jQuery(window).load(function() {
    autoAddCart();
	loadingModal();
	cartDonation();
});
