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
        url: '/user/updateDomains',
        type: 'POST',
        data: {
            'domains': str
        },
        success: function(response){
            alert('Domains was updated');
        }

    })

})