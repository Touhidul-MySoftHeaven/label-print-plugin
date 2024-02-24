(function( $ ) {
	'use strict';
    var formTypeId;
    // remove function
    $(document).on('click', ".remove-row", function(){
        var tId = $(this).attr('t-id');
        $("#row_id_"+tId).remove();
    });
    $(document).on('keyup', "#related-product-search-input", function(){
        formTypeId = location.search.split('id=')[1]

        var search = $(this).val();
        if((search.length > 3) || (search.length == 0)){
            // remove of empty row
            var current_ids = []
            if(formTypeId != 3){
                $('.product-single-row').each((index, element) => {
                    var rId = $(element).attr("r-id");
                    if((!$('#qty-'+rId).val()) &&
                    (!$('#price-'+rId).val()) &&
                    (!$('#custom_text-'+rId).val())){
                        $(element).remove();
                    }else{
                        current_ids.push(rId);
                    }
                });                
            }else{
                $('.product-single-row').each((index, element) => {
                    var rId = $(element).attr("r-id");
                    if(!$('#plu-'+rId).val()){
                        $(element).remove();
                    }else{
                        current_ids.push(rId);
                    }
                });
            }

            current_ids = current_ids.toString();

            $.ajax({
                type: 'POST',
                url: ajax_object.ajax_url, // Use the WordPress AJAX URL
                data: {
                    action: 'search_product',
                    nonce: $('#custom_product_gallery_nonce').val(),
                    search: search,
                    expect_product_id: current_ids
                    // expect_product_id: $("#related-product").val()
                },
                success: function(response) {

                    // checking current products
                    var alreadyShownProductIds = []
                    $('.product-single-row').each((index, element) => {
                        var rId = $(element).attr("r-id");
                        alreadyShownProductIds.push(rId);
                    });

                    var obj = JSON.parse(response);
                    var html = '';
                    $.each( obj, function( key, value ) {
                        if(jQuery.inArray(value.a_id, alreadyShownProductIds) === -1) {
                            if(formTypeId != 3){
                                html += `
                                <tr id="row_id_`+value.a_id+`" class="product-single-row" r-id="`+value.a_id+`">
                                    <td><small>`+value.serial+`</small></td>
                                    <td><small>`+value.title+`</small></td>
                                    <td>
                                    <input type="hidden" name="a_id[]" value="`+value.a_id+`" >
                                    <input type="hidden" name="title[]" value="`+value.title+`" >
                                    <input type="hidden" name="serial[]" value="`+value.serial+`" >
                                    <input type="hidden" name="weight[]" value="`+value.weight+`" >
                                    <input type="hidden" name="ingredients[]" value="`+value.ingredients+`" >
                                    <input type="hidden" name="preview_img[]" value="`+value.preview_img+`" >
                                    <input
                                        type="number"
                                        min="0"
                                        class="form-control"
                                        name="qty[]"
                                        id="qty-`+value.a_id+`"
                                        placeholder="Antal"
                                        value=""
                                    />
                                    </td>
                                    <td>
                                    <input
                                        type="number"
                                        step="any"
                                        min="0"
                                        class="form-control"
                                        name="price[]"
                                        id="price-`+value.a_id+`"
                                        placeholder="Pris kr/st"
                                        value=""
                                    />
                                    </td>
                                    <td>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="custom_text[]"
                                        id="custom_text-`+value.a_id+`"
                                        placeholder="Fritext (ersätter all text)"
                                        value=""
                                    />
                                    </td>
                                    <!-- Search -->
                                    <td class="remove-row" t-id="`+value.a_id+`">
                                    <i class="icon-remove"></i>
                                    </td>
                                    <!-- Search Ends -->
                                </tr>`;
                            }else{
                                html +=`
                                <tr id="row_id_`+value.a_id+`" class="product-single-row" r-id="`+value.a_id+`">
                                    <td><small>`+value.serial+`</small></td>
                                    <td><small>`+value.title+`</small></td>
                                    <td>
                                    <input type="hidden" name="a_id[]" value="`+value.a_id+`" >
                                    <input type="hidden" name="title[]" value="`+value.title+`" >
                                    <input type="hidden" name="serial[]" value="`+value.serial+`" >
                                    <input type="hidden" name="weight[]" value="`+value.weight+`" >
                                    <input type="hidden" name="ingredients[]" value="`+value.ingredients+`" >
                                    <input type="hidden" name="preview_img[]" value="`+value.preview_img+`" >

                                    <input
                                        type="number"
                                        min="0"
                                        class="form-control"
                                        name="plu[]"
                                        id="plu-`+value.a_id+`"
                                        placeholder="PLU"
                                        value=""
                                    />
                                    </td>
                                    <!-- Search -->
                                    <td class="remove-row" t-id="`+value.a_id+`">
                                    <i class="icon-remove"></i>
                                    </td>
                                    <!-- Search Ends -->
                                </tr>
                                `;
                            }
                        }
                    });
                    $(".product-table-body").append(html)
                }
            });
        }
    });
})( jQuery );
