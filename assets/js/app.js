const _badWord = ['Anjing','Babi','Kunyuk','Bajingan','Asu','Bangsat','Kampret','Kontol','Memek','Ngentot','Pentil','Perek','Pepek','Pecun','Bencong','Banci','Maho','Gila','Sinting','Tolol','Sarap','Setan','Lonte','Hencet','Taptei','Kampang','Pilat','Keparat','Bejad','Gembel','Brengsek','Tai','Anjrit','Bangsat','Fuck','Tetek','Ngulum','Jembut','Totong','Kolop','Pukimak','Bodat','Heang','Jancuk','Burit','Titit','Nenen','Bejat','Silit','Sempak','Fucking','Asshole','Bitch','Penis','Vagina','Klitoris','Kelentit','Borjong','Dancuk','Pantek','Taek','Itil','Teho','Bejat','Pantat','Bagudung','Babami','Kanciang','Bungul','Idiot','Kimak','Henceut','Kacuk','Blowjob','Pussy','Dick','Damn','Ass','anj','b4b1','4s0','as0','tempik','ngnt0t','anjng','ancuk','cuk','jancuk','raimu','dasmu','ndasmu','matamu','lambemu','cangkemmu','su','njing'];
    
    String.prototype._replaceAllString = function(s, r) {
        return this.split(s).join(r); 
    };
    
    function _filterBadWord(str,txt,dt){
        if (str) {
            var str = str.toLowerCase(); 
            txt = txt ? txt : "***"; 
            dt = dt ? dt : _badWord; 
            for (var i = 0; i < dt.length; i++) {
                var kk = dt[i].toLowerCase(); var ii = str.search(kk); 
                if ( ii != -1) {
                    str = str._replaceAllString(kk,txt); 
                } 
            } return str; 
        } else{
            return undefined; 
        } 
    }

    $(document).ready (function () {
        $('#tampil').load ('tampil.php', 'update=true');
    });


    function sendMessage ()
    {
        var pesan = $('#pesan').val();
        var post = _filterBadWord(pesan,'***');
        if(post == '') {
            alert('Masukan Pesan')
        } else {
            $.ajax({
            'url': 'inp.php',
            'type': 'POST',
            'data': {pesan: post},
            success: function() {
                    $('#pesan').val('');
                    var updater = setTimeout (function () {
                    $('#tampil').load ('tampil.php', 'update=true');
                    }, 500);
                }
            });
        }
    }

    function likeMessage(id){
        // alert('like mlebu')
        $.ajax({
        'url': 'like.php',
        'type': 'POST',
        'data':{id:id}
,        success: function() {
                var update = setTimeout (function () {
                $('#tampil').load ('tampil.php', 'update=true');
                }, 500);
			}
        });
    }
    function unLikeMessage(id){
        // alert('like mlebu')
        $.ajax({
        'url': 'unlike.php',
        'type': 'POST',
        'data':{id:id}
,        success: function() {
                var update = setTimeout (function () {
                $('#tampil').load ('tampil.php', 'update=true');
                }, 500);
			}
        });
    }
    
    function dislikeMessage(id){
        // alert('like mlebu')
        $.ajax({
        'url': 'dislike.php',
        'type': 'POST',
        'data':{id:id}
,        success: function() {
                var update = setTimeout (function () {
                $('#tampil').load ('tampil.php', 'update=true');
                }, 500);
			}
        });
    }
    
    function unDislikeMessage(id){
        // alert('like mlebu')
        $.ajax({
        'url': 'undislike.php',
        'type': 'POST',
        'data':{id:id}
,        success: function() {
                var update = setTimeout (function () {
                $('#tampil').load ('tampil.php', 'update=true');
                }, 500);
			}
        });
    }
