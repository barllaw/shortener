$('#save_domains').click(function (){

    let domains = $('.domain');
    let str ='';

    //Doing str of domains
    for(let i = 0; i < domains.length; i++){
        if(domains[i].checked){
            str += domains[i].value+',';
        }
    }
    str = str.substring(0, str.length - 1)
    $.ajax({
        url: '/user/update/domains',
        type: 'POST',
        data: {
            'domains': str
        },
        success: function(response){
            alert('Domains was updated');
        }

    })

})
$('#save_stairs').click(function (){

    let links = $('.link');
    let str ='';

    //Doing str of domains
    for(let i = 0; i < links.length; i++){
        if(links[i].checked){
            str += links[i].value+',';
        }
    }
    str = str.substring(0, str.length - 1)
    $.ajax({
        url: '/link/update/stairs',
        type: 'POST',
        data: {
            'links': str
        },
        success: function(response){
            alert('Stairs was updated');
        }

    })

})
//Update landing
$('.btn_land_save').click(function(){
    land = $('#landing').val();

    $.ajax({
        url: '/user/update',
        type: 'POST',
        data: {
            'update_land' : true,
            'land': land
        },
        success: function(response){
            if(response == 'ok'){
                alert('Landing was updated');
            }
        }

    })
})
//Change login or password
$('.change form button').click(function(e){
    e.preventDefault();

    param = $('input[name="param"]').val();
    current_ = $('input[name="current"]').val();
    new_ = $('input[name="new"]').val();
    let msg = $('.msg_error');

    if(current_.length < 4 || current_.length > 25){
        $(msg).css('opacity', '1').html('Current '+ param +' must be from 4 to 25 symbols');
        return
    }
    if(new_.length < 4 || new_.length > 25){
        $(msg).css('opacity', '1').html('New '+ param +' must be from 4 to 25 symbols');
        return
    }
    if(current_ == new_){
        $(msg).css('opacity', '1').html('Current '+ param +' and new password are the same');
        return
    }
    $.ajax({
        url: '/user/change/',
        type: 'POST',
        data: {
            'param' : param,
            'current': current_,
            'new': new_
        },
        success: function(response){
            if(response == 'ok'){
                alert(param + ' was updated');
                location.href = document.domain;
            }else{
                $(msg).css('opacity', '1').html(response);
            }
        }

    })
})

