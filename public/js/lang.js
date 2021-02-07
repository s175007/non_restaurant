var aLangKeys = new Array();
aLangKeys['vn']=new Array();
aLangKeys['jp']=new Array();

aLangKeys['vn']['home']='Trang chủ';
aLangKeys['vn']['food']='Xem menu';
aLangKeys['vn']['drink']='Nước uống';
aLangKeys['vn']['table']='Bàn';
aLangKeys['vn']['contacts']='Địa chỉ';
aLangKeys['vn']['follow']='Theo dõi';
aLangKeys['vn']['admin']='Quản lí';

aLangKeys['jp']['home']='ホームページ';
aLangKeys['jp']['food']='食べ物';
aLangKeys['jp']['drink']='飲み物';
aLangKeys['jp']['table']='テーブル';
aLangKeys['jp']['contacts']='住所';
aLangKeys['jp']['follow']='フォロー';
aLangKeys['jp']['admin']='管理';

$(document).ready(function() {
    // onclick behavior
    $('.lang').click( function() {
        var lang = $(this).attr('id'); // obtain language id
        // translate all translatable elements
        $('.tr').each(function(i){
          $(this).text(aLangKeys[lang][ $(this).attr('key') ]);
        });
    } );
});




