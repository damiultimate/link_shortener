/**
 *  Premium URL Shortener jQuery Application
 *  Copyright @KBRmedia - All rights Reserved 
 */
$(document).ready(function(){
	
 /**
  * Shorten URL
  **/
 // Ajax request: URL shortening and error handeling
  $(document).on('submit',"form#main-form",function(e) {
    e.preventDefault();
    var form = $(this);
    if($("#multiple-form").val()==="1"){
      var url =  form.find(".main-textarea");
    }else{
      var url =  form.find(".main-input");
    }
    if(!url.val()){
	  Snackbar.show({text: lang.error,backgroundColor: '#e22e40',textColor: '#fff',showAction: false}); 
      $('.main-input').addClass('error');
      return;
    }
    var lang_shorn=form.find('#shortenurl').text();   
    $.ajax({
      type: "POST",
      url: appurl+"/shorten",
      data: $(this).serialize(),
      dataType:"json",
      beforeSend: function() {
        $('.shortbtnz').append("<div class='spinner-container-parent'><div class='spinner-container'><div class='spinner'><div class='spinner-left'><div class='spinner-circle'></div></div><div class='spinner-right'><div class='spinner-circle'></div></div></div></div></div>");            
      },
      complete: function() {        
        $('.shortbtnz').find('.spinner-container-parent').fadeOut("fast");
      },            
      success: function (html) {                        
          if(html.error){
            if(html.html == "captcha"){
              $('#captcha').fadeIn('slow');                
            }
			Snackbar.show({text: html.msg,backgroundColor: '#e22e40',textColor: '#fff',showAction: false}); 			
            $('.main-input').addClass('error');
          }else{
            $('.main-input').removeClass('error');              
            $('.main-advanced').fadeOut('slow');
            $('#captcha').fadeOut('slow');                     
          if(!html.confirm){
            /**$("#shortenurl").hide();
            $("#copyurl").show();   **/            
            
            var short = html.short.split("#");
			Snackbar.show({text: lang.success,backgroundColor: '#1aa82c',textColor: '#fff',showAction: false});
            $('.modal-contentlink').html('<div class="panel-default panel-body"><div class="copy-link-block"><span class="short-url">'+short[0]+'</span><button class="btn btn-primary" id="copyurlmodal" type="button"><i class="zmdi zmdi-copy"></i></button></div><div class="qr"><img src="'+short[0]+'/qr" alt=""><a href="'+html.short+'/qr" target="_blank" class="mdbtn btn btn-primary copy" data-value="'+html.short+'/qr?size=500x500">'+lang.qr+'</a></div><hr><p>'+lang.stats+': <a href="'+short[0]+'+" target="_blank" style="color: #2196F3;border-bottom: 1px solid #2196F3;"> '+short[0]+'+ </a></p><div class="share-message"><p>'+lang.share+'</p><div class="share"><a href="http://www.facebook.com/sharer.php?u='+html.short+'" target="_blank" class="btn btn-facebook u_share" title="Facebook"><i class="zmdi zmdi-facebook"></i></a><a href="https://twitter.com/share?url='+html.short+'" target="_blank" class="btn btn-twitter u_share" title="Twitter"><i class="zmdi zmdi-twitter"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&url='+html.short+'" target="_blank" class="btn btn-linkedin u_share" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a><a href="https://pinterest.com/pin/create/button/?url='+html.short+'" target="_blank" class="btn btn-pinterest u_share" title="Pinterest"><i class="zmdi zmdi-pinterest"></i></a></div></div></div>');
			$('.overlaylink').fadeIn();
             zClipload();
			 refreshLinks();
          }else{
            $('.share-this').slideUp();
			Snackbar.show({text: lang.success,backgroundColor: '#1aa82c',textColor: '#fff',showAction: false});			
          }           
          $('.main-advanced').find('input').val('');
		  $('.main-input').val('');
          form.find(".main-textarea").val(html.short);  
          /**url.select();**/
		  if($(".g-recaptcha").length > 0){
            grecaptcha.reset();
          }
          var copy = new Clipboard('#copyurl'); 
		  var copymodal = new Clipboard('#copyurlmodal');		  
          $("#submit").hide();
          $("#copyurl").attr("data-clipboard-text", html.short).show();
		  $("#copyurlmodal").attr("data-clipboard-text", html.short).show();
          copy.on('success', function(e) {  
			Snackbar.show({text: lang.copy});
            $("#copyurl").hide();
            $("#shortenurl").show();
            $('input.main-input').val('');
          });
		  copymodal.on('success', function(e) {  
			Snackbar.show({text: lang.copy});
          });		  
        } 
          
      }
    });  
  });    
  /**
  * Search for URls
  **/
  $("#search").submit(function(e){
    e.preventDefault();
    var val=$(this).find("input[type=text]").val();
    var action=$(this).attr("action");
    if(val.length > 3){
      $.ajax({
          type: "POST",
          url: action,
          data: "q="+val+"&token="+token,
          beforeSend: function() {
            $(".postprogress").fadeIn();
          },
          complete: function() {      
            $('.postprogress').fadeOut();
          },          
          success: function (r) { 
            $(".return-ajax tbody").html(r);
            $(".url-container").slideUp('fast');
            $(".return-ajax").slideDown('fast');
            loadall();
          }
      }); 
    }else{
		Snackbar.show({text: 'Keyword must be more than 3 characters!'});
    }   
  });
 /**
   * Server Requests
   **/ 
  $(document).on('click','.ajax_call',function(p){
      p.preventDefault();
      var e = $(this);
      var id = $(this).attr("data-id");
      var action = $(this).attr("data-action");
      var loading="<img class='loader' src='"+appurl+"/static/loader.gif' style='margin:5px 50%;border:0;' />";
      var title = e.attr("data-title");
      if(typeof($(this).attr("data-container")) == "undefined"){
        if(typeof($(this).attr("data-class"))!="undefined") {
          var container=$("."+$(this).attr("data-class"));
          var loading="<span><i class='glyphicon glyphicon-refresh'></i> Loading</span>";
        }else{
          if(typeof(title) == "undefined") title="User Account";
          $(this).modal({title:title,content:"Please wait while loading...",confimation:1});
          var container=$("#modal-alert > p");
        }
      }else{
        var container=$("#"+$(this).attr("data-container"));
      }
      var title=$(this).attr("data-title");
      $.ajax({
        type: "POST",
        url: appurl+"/server",
        data: "request="+action+"&id="+id+"&token="+token,
        beforeSend: function() {
          container.html(loading);
        },
        complete: function() {   
          loadall();    
          $('img.loader').fadeOut("fast");
        },                   
        success: function (html) {           
          if(typeof(e.attr("data-active")) !== "undefined"){
            e.parents("div#user-content").find(".active").removeClass("active");
            e.addClass(e.attr("data-active"));
          }
          container.hide();                                            
          container.html(html);
          container.fadeIn('fast');
        }
      });       
  });
  if($("#widget_activities").length > 0){
    var intval =  $("#widget_activities").attr("data-refresh");
    setInterval(function(){
      server("activities");
    },intval);
  }
  
  $("#archiveall").click(function(e){
    e.preventDefault();
    if($(".url-container input[type=checkbox]:checked").length < 1){
      return $(".return-ajax").html('<div class="alert alert-info" style="color:#fff">You must select at least 1 url.</div><br>').fadeIn();
    }    
    $(".url-container input[type=checkbox]").each(function(e){
      if($(this).prop("checked")) {
        archive($(this).data("id"));
      }
    });
  });
  $(document).on('click','#addtobundle',function(e) {
    e.preventDefault();       

    if($(".url-container input[type=checkbox]:checked").length < 1){
      return $(".return-ajax").html('<div class="alert alert-info" style="color:#fff">You must select at least 1 url.</div><br>').fadeIn();
    }

    var title = $(this).data("content"); 
    $.ajax({
      type: "POST",
      url: appurl+"/server",
      data: "request=bulk_bundle&token="+token,
      complete: function() {   
        loadall();    
        $('img.loader').fadeOut("fast");
      },                   
      success: function (html) {   
        $(this).modal({title: title, content:"Please wait while loading...",confimation:1});
        let container=$("#modal-alert > p");                    
        container.hide();                                            
        container.html(html);
        container.fadeIn('fast');
      }
    });    
  });
  $(document).on('submit', '[role=bulk-bundle]', function(e){
    e.preventDefault();
    let bundleid = $(this).find("select").val();
    $(".url-container input[type=checkbox]").each(function(e){
      if($(this).prop("checked")) {
        addtobundle($(this).data("id"), bundleid);
      }
    });
  });
  
}); 
/**
 * Realtime Data
 **/
function server(fn){
  if(fn=="activities"){
    var li=$("#widget_activities").find("li");
    var text=$("#widget_activities h3 small").text();
    var id=li.attr("data-id");
    if(typeof(id) == "undefined") id=0;
    $.ajax({
          type: "POST",
          url: appurl+"/server",
          data: "request=activities&id="+id+"&token="+token,
          beforeSend: function() {
          	li.removeClass("new_item");
            $("#widget_activities h3 small").html("<img class='loader' src='"+appurl+"/static/loader.gif' style='margin:0 45%;border:0;' />");
          },
          complete: function() {      
            $("#widget_activities h3 small").text(text);
          },          
          success: function (r) {             
            $("#widget_activities ul").html(r);
          }
      }); 
  }
  return false;
}  
/**
 * [refreshLinks description]
 * @author KBRmedia <https://gempixel.com>
 * @version 5.6
 */
function refreshLinks(){
  if($(".data-holder").length < 1) return;
  $.ajax({
      type: "POST",
      url: appurl+"/server",
      data: "request=refreshlinks&token="+token,
      beforeSend: function() {
        $(".data-holder").html("<div class='data-modal'><img class='loader' src='"+appurl+"/static/loader.gif' style='margin:0 45%;border:0;' /></div>");
      },
      complete: function() {      
        $(".data-modal").remove();
      },          
      success: function (r) {
        $(".data-holder").html(r);
        loadall();
      }
  });   
}
/**
 * [archive description]
 * @author KBRmedia <https://gempixel.com>
 * @version 1.0
 */
var archive = (id) => {
  var container = $('.return-ajax');
  var loading="<img class='loader' src='"+appurl+"/static/loader.gif' style='margin:5px 50%;border:0;' />";
  $.ajax({
    type: "POST",
    url: appurl+"/server",
    data: "request=archive&id="+id+"&token="+token,
    beforeSend: function() {
      container.html(loading);
    },
    complete: function() {   
      loadall();    
      $('img.loader').fadeOut("fast");
    },                   
    success: function (html) {
      container.hide();                                            
      container.html(html);
      container.fadeIn('fast');
    }
  });   
}
var addtobundle = (id, bundleid) => {
  var container = $('.return-ajax');
  var loading="<img class='loader' src='"+appurl+"/static/loader.gif' style='margin:5px 50%;border:0;' />";
  $.ajax({
    type: "POST",
    url: appurl+"/server",
    data: "request=bulk_bundle_add&id="+id+"&bundleid="+parseInt(bundleid)+"&token="+token,
    beforeSend: function() {
      container.html(loading);
    },
    complete: function() {   
      $('img.loader').fadeOut("fast").remove();
    },                   
    success: function (html) {
      $(document).modal_destroy();
      container.hide();      
      container.html(html.msg);
      container.fadeIn('fast');
      refreshLinks();
      $("#selectall").html('<i class="fa fa-check-square"></i>');
      $('input').iCheck('uncheck');
    }
  });   
}