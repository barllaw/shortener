//Change textarea height for content
function textAreaAdjust(element) {
  element.style.height = "1px";
  element.style.height = (5+element.scrollHeight)+"px";
}


//COPY TEXT WITH CLIPBOARD.JS
btns = document.querySelectorAll('#copy_btn');
for (let i = 0; i < btns.length; i++) {
  btns[i].onclick = function(){
    btn = btns[i].className;
    let clipboard = new ClipboardJS('.'+btn);
    clipboard.on('success', function(e) {
        $('.copy_success').addClass('active');
        setTimeout(() => $('.copy_success').removeClass('active'), 2000);
        console.log('Copied');
    })
  }
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

//EDIT SHORTLINK
function editShortlink( link, shortlink, tiktok, id, date){
  $('body').css('overflow', 'hidden');
  popup_wrap = $('.edit_link_popup_wrap');

  $('.popup').addClass('popup_show');
  $('#link-for_edit').val(link);
  $('#edit_link_id').val(id);
  $('#edit_link_date').val(date);
  $('#shortlink-for_edit').html(shortlink);
  $('#tiktok-for_edit').html(tiktok);
  popup_wrap.addClass('popup_wrap_show');
  
}

//DELETE SHORTLINK
function deleteShortlink(){
  $('.edit_link_popup_wrap').removeClass('popup_wrap_show');
  popup_wrap = $('.delete_link_popup_wrap');
  id = $('#edit_link_id').val();
  date = $('#edit_link_date').val();
  
  $('#link-for_delete').html($('#link-for_edit').val());
  $('#shortlink-for_delete').html($('#shortlink-for_edit').text());
  $('#tiktok-for_delete').html($('#tiktok-for_edit').text());
  $('#delete_shortlink_btn').attr('href', '/link/delete/links/'+id+'/'+date);
  popup_wrap.addClass('popup_wrap_show');
  
}

//DELETE USER
function deleteUser( login ){
  $('body').css('overflow', 'hidden');
  popup_wrap = $('.delete_user_popup_wrap');
  $('.popup').addClass('popup_show');
  popup_wrap.addClass('popup_wrap_show');

  $('h3').append(login);
  $('#delete_user_btn').attr('href', '/user/deleteUser/'+login);
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

//Change href for landing
$('#link_to_land').attr('href','/app/views/landing/'+$('#landing').val()+'/index.php')
$('#landing').change(function(){
  land = $(this).val();
  $('#link_to_land').attr('href','/app/views/landing/'+land+'/index.php')
})

//Change custom to nickname
$('.nickname').change(function(){
  $('.custom_link').val($('.nickname').val());
})

//style input change
$('#images').change(function() {
  if ($(this).val() != '') {
      $(this).prev().text('Selected photo: ' + $(this)[0].files.length).addClass('success_image')
  }
  else {
      $(this).prev().text('Добавити...').removeClass('success_image');
  };
});

// Menu
$('#menu_btn').click(function(){
  $('#menu').show();
});

$(document).click(function (e){
  if ( $(e.target).closest('#menu_btn').length ) {
    return;
  }
  $('#menu').hide();
});

//Download random images
$('#r_img-download').click(function (){
  r_imgs = document.querySelectorAll('.r_img');
  for (let i = 0; i < r_imgs.length; i++) {
    href = $(r_imgs[i]).attr('href');
    window.open('https://4youtitstok.fun' + href, '_blank');
  }
})
