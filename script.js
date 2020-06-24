

$('.select').on('change' , function () {
    if (this.value === 'Другое') {
        $('.other').css('display', 'block')
    }else {
        $('.other').css('display', 'none')
    }

});
// if($('#has').prop('checked')!=='checked'){
//     $('.send').attr('disabled', true);
// }else {
//     $('.send').attr('disabled', false);
// }

$('.check').on('click' , function () {
    $('#nothing').serialize();
    if($(this).is(":checked")) {
        $('.send').attr('disabled', false);
    }else {
        $('.send').attr('disabled', true);
    }
});

$(document).ready(function(){

    $('.send').click(function () {
        let opt1 = [],
            opt2 = [],
            cond = $('.select').val(),
            other = $('.other').val(),
            date = new Date().toLocaleDateString(),
            time = new Date().toLocaleTimeString();


        $('.check1').each(function () {
            if($(this).is(':checked'))
            {
                opt1.push($(this).val());
            }
        })
        opt1 = opt1.toString();
        $('.check2').each(function () {
            if($(this).is(':checked'))
            {
                opt2.push($(this).val());
            }
        })
        opt2 = opt2.toString();

        $.ajax({
            url:"send.php",
            method: 'POST' ,
            data: {
                opt1: opt1,
                opt2: opt2,
                cond: cond,
                other: other,
                date: date,
                time: time
            },
            success:function (data) {
                $('#result').html(data);
            }
        })
    })
});