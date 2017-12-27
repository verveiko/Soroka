// Page ready
$(document).ready(function()
{
	setUpLightBox(); // Add lightbox Support

	
});

// Light box support
function setUpLightBox()
{
	window.targetLightbox;
	
	$(document).on('click', '[data-lightbox]', function(e) // Create Lightbox Modal
	{
		e.preventDefault();
		targetLightbox = $(this);
		var captionData ='<p class="lightbox-caption">'+$(this).attr('data-caption')+'</p>';
		if(!$(this).attr('data-caption')) // No caption caption data
		{
			captionData = '';
		}
		
		var customModal = $('<div id="lightbox-modal" class="modal fade"><div class="modal-dialog"><div class="modal-content '+$(this).attr('data-frame')+'"><button type="button" class="close close-lightbox" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="modal-body"><a href="#" class="prev-lightbox" aria-label="prev"></a><a href="#" class="next-lightbox" aria-label="next"></a><img id="lightbox-image" class="img-responsive" src="'+$(this).attr('data-lightbox')+'">'+captionData+'</div></div></div></div>');
		$('body').append(customModal);
		$('#lightbox-modal').modal('show');
		
		// Handle navigation buttons (next - prev)
		if($('a[data-lightbox]').index(targetLightbox) == 0)
		{
			$('.prev-lightbox').hide();
		}
		if($('a[data-lightbox]').index(targetLightbox) == $('a[data-lightbox]').length-1)
		{
			$('.next-lightbox').hide();
		}
	}
	).on('hidden.bs.modal', '#lightbox-modal', function () // Handle destroy modal 
	{
		$('#lightbox-modal').remove();
	})
	
	$(document).on('click', '.next-lightbox, .prev-lightbox', function(e) 
	{
		e.preventDefault();
		var idx = $('a[data-lightbox]').index(targetLightbox);
		var next = $('a[data-lightbox]').eq(idx+1) // Next
		
		if($(this).hasClass('prev-lightbox'))
		{
			next = $('a[data-lightbox]').eq(idx-1) // Prev
		}
		$('#lightbox-image').attr('src',next.attr('data-lightbox'));
		$('.lightbox-caption').html(next.attr('data-caption'));
		targetLightbox = next;	
		
		// Handle navigation buttons (next - prev)
		$('.next-lightbox, .prev-lightbox').hide();	
		
		if($('a[data-lightbox]').index(next) != $('a[data-lightbox]').length-1)
		{
			$('.next-lightbox').show();
		}
		if($('a[data-lightbox]').index(next) > 0)
		{
			$('.prev-lightbox').show();
		}
	});
}