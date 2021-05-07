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

