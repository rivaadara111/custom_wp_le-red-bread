jQuery(function(){

  jQuery('#close-comments').on('click', function(event){

  event.preventDefault();

    jQuery.ajax({
      method: 'POST',
      url: lrb_vars.rest_url + 'wp/v2/posts/' + lrb_vars.post_id,  //will be our admin_ajax url
      data: {
        comment_status: 'open' //what you are changing about your posts
      },
      beforeSend: function(xhr) { //modify headers of request before we send it with this before send callback.
        xhr.setRequestHeader('X-WP-Nonce', lrb_vars.comment_nonce ); //what nonce you are changing
}
    }).done(function(response){ //chain on a done response to check that it worked
        alert('success! comments are closed.');
        });
  });

});
