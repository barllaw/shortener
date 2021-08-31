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

