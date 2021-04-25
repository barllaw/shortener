function textAreaAdjust(element) {
  element.style.height = "1px";
  element.style.height = (5+element.scrollHeight)+"px";
}

//Copy link
function copyLink(link_class){
  let copyText = document.querySelector(link_class).innerHTML;
  let msg = document.querySelector('.copy_success');

  navigator.clipboard.writeText(copyText).then(() => {
    msg.classList.add('active');
    setTimeout(() => msg.classList.remove('active'), 2000)
  });
}

// let users_btn = document.querySelector('#users_btn');
// let users_wrap = document.querySelector('.users-wrap');
// users_btn.onclick = function(){
//   users_wrap.classList.toggle('show_users');
// }
//Show wrap
function showWrap(wrap_class){
  let wrap = document.querySelector('.'+wrap_class);
  wrap.classList.toggle('show_wrap');
}

//Paste text
function pasteText(){
  let input = document.querySelector('.nickname');
  navigator.clipboard.readText()
      .then(text => {
          // `text` содержит текст, прочитанный из буфера обмена
          input.value = text;
      })
      .catch(err => {
          // возможно, пользователь не дал разрешение на чтение данных из буфера обмена
          alert('Something went wrong', err);
      });
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
function saveLink(){
  body = document.querySelector('body');
  popup = document.querySelector('.popup');
  popup_wrap = document.querySelector('.popup_wrap');
  // // link_textarea = document.querySelector('.link_textarea').value;
  // // link_textarea_save = document.querySelector('.link_textarea_save');
  // link_textarea_save.value = link_textarea;
  popup.classList.add('popup_show');
  popup_wrap.classList.add('popup_wrap_show');
  body.style.cssText = 'overflow: hidden;';

}
//CLOSE POPUP
function closePopup(){
  body = document.querySelector('body');
  popup = document.querySelector('.popup');
  popup_wrap = document.querySelector('.popup_wrap');
  popup.classList.remove('popup_show');
  popup_wrap.classList.remove('popup_wrap_show');
  body.style.cssText = 'overflow: visible;';
}
