/* foodlife JavaScript */
    
/* toTop Button */
$(function() { 
    $(window).scroll(function() { 
    if($(this).scrollTop() !== 0) { 
        $('#toTop').fadeIn(); 
            } else {	 
                    $('#toTop').fadeOut(); 
            }	 
        }); 
        $('#toTop').click(function() { 
        $('body,html').animate({scrollTop:0},800); 
    });
});

/* one click modal - get product's image, name, price */
$(function() { 
    //$('a[data-toggle="modal"]').on('click', (e) => {
    $('a[data-target="#oneClickOrder"]').on('click', (e) => {
        
        const self = e.target;
        const modal = $('#oneClickOrder .modal-body');
        
        const modalImage = $('#one-click-img');
        const modalName = $('#one-click-name');
        const modalPrice = $('#one-click-price');
        
        // category page - product's list
        let productImage = $(self).closest('.card').find('img').attr('src');
        let productName = $(self).closest('.card').find('h4 a').html();
        let productPrice = $(self).closest('.card').find('h5 b').html();
        
        // single product page
        if( !productImage) { productImage = $('img[role="presentation"]').attr('src'); }
        if( !productName) { productName = $('h1').html(); }
        if( !productPrice) { productPrice = $('#item-price').html(); }
        
        $(modalImage).attr('src',productImage);
        $(modalName).html(productName);
        $(modalPrice).html(productPrice);
        $('#input-one-click-order').mask('+7-999-999-99-99');
        $('#input-item-name').val(productName);
        $('#input-item-price').val(productPrice);
    });
    
});

/* related: show modal on ajax_add_to_cart click */
$('.ajax_add_to_cart').each(function() {
    $(this).on('click', function() {
        $('#added-to-cart').modal();
    });
});

$(function() {
    // shipping: show / hide radio if > 5000
    $(document).ajaxSuccess(function() {
        const $tag = $('td.text-center h5 span.woocommerce-Price-amount');
        const $total = parseFloat($tag.text().replace(',',''));
        if( $total >= 5000) {
            $('#shipping_method li').each(function() {
                const li = $(this);
                if( $(li).find('input[type="radio"]').val() == 'free_shipping:5' ) {
                    $(li).find('input[type="radio"]').click();
                    $(li).find('input[type="radio"]').attr('checked', 'checked');
                    $(li).show();
                } else {
                    $(li).hide();
                }
            });
        }
    });
    
});



