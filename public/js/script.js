//Change textarea height for content
function textAreaAdjust(element) {
  element.style.height = "1px";
  element.style.height = (5+element.scrollHeight)+"px";
}


//COPY TEXT WITH CLIPBOARD.JS
function copyLink(btn, msg){
  let clipboard = new ClipboardJS(btn);
  clipboard.on('success', function(e) {
    msg = $(msg);
    $(msg).addClass('active');
    setTimeout(() => $(msg).removeClass('active'), 2000);
    console.log('Copied');
});
}

//Show wrap
function showWrap(wrap_class){
  let wrap = document.querySelector('.'+wrap_class);
  wrap.classList.toggle('show_wrap');
}

//Change style for input
function checkInput(input_class){
  let input = document.querySelector('.'+input_class);
  if(input.value != ''){
      input.style.cssText = "background: #fff; border: 1px solid #333";
  }else{
      input.style.cssText = "background: #ffffff90; border: 1px solid #bbb";
  }
}


//SAVE LINK
function addLink(param){
  $('body').css('overflow', 'hidden');
  
  if(param == 'mainlink'){
    popup_wrap = $('.mainlink_popup_wrap');}
  if(param == 'stairs_link'){
    popup_wrap = $('.stairs_popup_wrap');}
  

  $('.popup').addClass('popup_show');
  popup_wrap.addClass('popup_wrap_show');
}

//CLOSE POPUP
close_btn = $('.close');
for(let i = 0; i < close_btn.length;i++){
  $(close_btn[i]).click(function (){

    $('.popup').removeClass('popup_show');
    $('.popup_wrap').removeClass('popup_wrap_show');
    $('body').css('overflow', 'visible');

  })
}

window.addEventListener('popstate', function(event) {
  // The popstate event is fired each time when the current history entry changes.

  var r = confirm("You pressed a Back button! Are you sure?!");

  if (r == true) {
      // Call Back button programmatically as per user confirmation.
      history.back();
      // Uncomment below line to redirect to the previous page instead.
      // window.location = document.referrer // Note: IE11 is not supporting this.
  } else {
      // Stay on the current page.
      history.pushState(null, null, window.location.pathname);
  }

  history.pushState(null, null, window.location.pathname);

}, false);