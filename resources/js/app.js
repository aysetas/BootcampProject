require('./bootstrap');
setTimeout(function(){
    $('.alert').slideUp(500);
    },5000); //mailden aktivasyon mesajını tıklayınca anasayfaya gelen mesajı 3sn sonra kaybolur.

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.qty-minus, .qty-plus').on('click', function(){
        var id=$(this).attr('data-id');
        var quantity=$(this).attr('data-qty');
        $.ajax({
            type:'PATCH',
            url:'/shoppingCart/guncelle/'+id,
            data:{quantity: quantity},
            success:function(){
                window.location.href='/shoppingCart';
            }
        });

    });



