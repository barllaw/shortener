let users_sum = $('.user_sum');
let percents = $('.percent');
let refs = $('.ref');
let result = $('.result');
let total_sum = 0;
// let btn = $('#btn_calc');
function calc(){
    for (let i = 0; i < users_sum.length; i++) {
        
        const sum = users_sum[i].value;
        const per = percents[i].value;
        const ref = refs[i].value;

        total_sum = total_sum + Number(sum);

        result_sum = sum * per / 100
        sum_for_ref = sum - result_sum

        $(result[i]).val(Number($(result[i]).val())+result_sum)

        if(ref != ''){
            sum_for_ref = (sum - result_sum) / 2

            for (let j = 0; j < users_sum.length; j++) {
                const el = result[j];

                if($(el).hasClass(ref+'_result')){
                    $(result[j]).val(Number($(result[j]).val())+sum_for_ref)

                }
            }
        }

        for (let n = 0; n < users_sum.length; n++) {
            const el = result[n];

            if($(el).hasClass('fanjq_result')){
                $(result[n]).val(Number($(result[n]).val())+sum_for_ref)

            }
        }


    }

    let users = $('h4');
    $('.result_str_wrap').html('');
    for (let i = 0; i < users.length; i++) {
        const user = $(users[i]).html();
        const res = $(result[i]).val();
        $('.result_str_wrap').append(user+ ' -- $'+res+'<br>');
    }

    $('.total_sum').val(total_sum);
}

let input  = $('.user_sum');
for (let i = 0; i < input.length; i++) {
    const el = input[i];
    $(el).keyup(function (){
        if(el.value == 0) {
            $(el).css('background', '#ff656585')
        }else{
            $(el).css('background', '#65ffa385')
        }
    })
}