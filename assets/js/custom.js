// Native Function
document.oncontextmenu = new Function("return false;");
function del_konfirmasi(url){ var c = confirm('Apa Kamu yakin untuk delete record?');if (c) window.location.href=url; return false; }
function kembali(){ return window.history.back(); }

//jQuery.noConflict();
jQuery(document).ready(function(){
	// Tooltip untuk info
	$("a").tooltip({
		show: {
			 effect: "slideDown", delay: 250
		},
		 position: {
			my: "left top",
			at: "left bottom"
		}
	});

	// Alert kalau data tidak ada
	$( "#dialog_alert" ).dialog({
		closeOnEscape: false,
		modal: true,
		buttons: {
			Ok: function() {
				$( this ).dialog( "close" );
				window.history.back();
			}
		}
	});
	
	// Date Qualification
	$("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
	$("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
	$("#datepicker3").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
	$("#datepicker4").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
	
	
	// site_url admin/organization
	$('a#edit').click(function(){
		$('input:disabled').prop('disabled', false);
		$('textarea:disabled').prop('disabled', false);
		$(this).hide();
		$('button#save').show();
	});
	
	// chart admin/organization
	$('a#show-structure').click(function(){
		$('div#structure').show('slow');
		$('div#chart').hide('slow');
	});
	$('a#show-chart').click(function(){
		$('div#structure').hide('slow');
		$('div#chart').show('slow');
	});
	
	// followup leave approval
	$('select#status').change(function(){
		if( $(this).val() == 5 ) {
			$('div#followup').show('slow'); } 
		else { 
			$('div#followup').hide('slow'); }
	});
	
	// tabs
	$("#tabs").tabs();
	
	// accordion
	$("#accordion").accordion();
	
	// dialog change photo
	$("#dialog" ).dialog({ autoOpen: false });
	$("#change").click(function(){ $('#dialog').dialog('open'); });
	
	// datepicker
	$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
	$("#requested_date").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true  });
	$("#leave_start").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true  });
	$("#leave_end").datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true  });
	
	// dropdown in leftmenu
	jQuery('.leftmenu .dropdown > a').click(function(){
		if(!jQuery(this).next().is(':visible'))
			jQuery(this).next().slideDown('fast');
		else
			jQuery(this).next().slideUp('fast');	
		return false;
	});
	
	if(jQuery.uniform) 
	   jQuery('input:checkbox, input:radio, .uniform-file').uniform();
		
	if(jQuery('.widgettitle .close').length > 0) {
		  jQuery('.widgettitle .close').click(function(){
					 jQuery(this).parents('.widgetbox').fadeOut(function(){
								jQuery(this).remove();
					 });
		  });
	}
	
	
   // add menu bar for phones and tablet
   jQuery('<div class="topbar"><a class="barmenu">'+
		    '</a></div>').insertBefore('.mainwrapper');
	
	jQuery('.topbar .barmenu').click(function() {
		  
		  var lwidth = '260px';
		  if(jQuery(window).width() < 340) {
					 lwidth = '240px';
		  }
		  
		  if(!jQuery(this).hasClass('open')) {
					 jQuery('.rightpanel, .headerinner, .topbar').css({marginLeft: lwidth},'fast');
					 jQuery('.logo, .leftpanel').css({marginLeft: 0},'fast');
					 jQuery(this).addClass('open');
		  } else {
					 jQuery('.rightpanel, .headerinner, .topbar').css({marginLeft: 0},'fast');
					 jQuery('.logo, .leftpanel').css({marginLeft: '-'+lwidth},'fast');
					 jQuery(this).removeClass('open');
		  }
	});
	
	// show/hide left menu
	jQuery(window).resize(function(){
		  if(!jQuery('.topbar').is(':visible')) {
		         jQuery('.rightpanel, .headerinner').css({marginLeft: '260px'});
					jQuery('.logo, .leftpanel').css({marginLeft: 0});
		  } else {
		         jQuery('.rightpanel, .headerinner').css({marginLeft: 0});
					jQuery('.logo, .leftpanel').css({marginLeft: '-260px'});
		  }
   });
	
	// dropdown menu for profile image
	jQuery('.userloggedinfo img').click(function(){
		  if(jQuery(window).width() < 480) {
					 var dm = jQuery('.userloggedinfo .userinfo');
					 if(dm.is(':visible')) {
								dm.hide();
					 } else {
								dm.show();
					 }
		  }
   });
	
	// change skin color
	jQuery('.skin-color a').click(function(){ return false; });
	jQuery('.skin-color a').hover(function(){
		var s = jQuery(this).attr('href');
		if(jQuery('#skinstyle').length > 0) {
			if(s!='default') {
				jQuery('#skinstyle').attr('href','css/style.'+s+'.css');	
				jQuery.cookie('skin-color', s, { path: '/' });
			} else {
				jQuery('#skinstyle').remove();
				jQuery.cookie("skin-color", '', { path: '/' });
			}
		} else {
			if(s!='default') {
				jQuery('head').append('<link id="skinstyle" rel="stylesheet" href="css/style.'+s+'.css" type="text/css" />');
				jQuery.cookie("skin-color", s, { path: '/' });
			}
		}
		return false;
	});
	
	// expand/collapse boxes
	if(jQuery('.minimize').length > 0) {
		  
		  jQuery('.minimize').click(function(){
			 if(!jQuery(this).hasClass('collapsed')) {
				jQuery(this).addClass('collapsed');
				jQuery(this).html("&#43;");
				jQuery(this).parents('.widgetbox')
				  .css({marginBottom: '20px'})
					.find('.widgetcontent')
					.hide();
			 } else {
				jQuery(this).removeClass('collapsed');
				jQuery(this).html("&#8211;");
				jQuery(this).parents('.widgetbox')
				  .css({marginBottom: '0'})
					.find('.widgetcontent')
					.show();
			 }
			 return false;
		  });
			  
	}
	
});