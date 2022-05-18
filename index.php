<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="assets/js/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>SiUdin</title>
</head>

<body class="bg-cover" style="background-image: url('assets/bg.jpg');">
    <header class="">
        <div class="logo">
            <img class="mx-auto mt-10 w-32 md:w-40 lg:w-60" src="assets/logo.png" alt="">
        </div>
        <div class="content-header mt-3">
            <h3 class="text-center italic text-[20px] font-robotoFlex text-[#1C1B1F] font-light">Write your hopes and
                suggestions</h3>
            <p class="text-center italic text-sm font-robotoFlex text-[#1C1B1F] font-extrabold">for our beloved
                campus<span class="ml-1 bg-[#003CD7]/50 w-[100px] h-5 relative top-1 inline-block rotate-3"><span
                        class="absolute right-2 -rotate-3 text-white">as an Anonim</span></span></p>
        </div>
    </header>
    <main>
        <div class="container lg:max-w-[50%] max-w-lg mx-auto mt-5 p-4 mb-10">
            <div class="lg:flex sm:block block">
                <textarea type="text" placeholder="Tulis pesan anda" rows="1" id="pesan" class="
                px-3
                py-2
                border
                shadow
                rounded
                w-full
                block
                text-sm
                text-slate-600
                focus:outline-none
                focus:ring-1
                focus:ring-sky-500
                focus:border-sky-500
                "></textarea>
                <!-- <button class="ml-3 mx-auto block bg-sky-500 px-5 py-2 justify-end rounded text-white font-semibold hover:bg-sky-600 active:bg-sky-700 ">Kirim</button>
                    -->
                <button onclick="sendMessage()"
                    class="bg-[#70FF75] px-5 hidden lg:block py-2 rounded-lg lg:ml-3 lg:mt-0 mt-2 text-white font-semibold font-inter mx-auto hover:bg-green-300 active:bg-green-400 focus:ring focus:ring-green-200 dark:bg-slate-300 dark:text-slate-800 dark:hover:text-slate-900 dark:hover:bg-slate-100">
                    <img src="assets/SendIcon.svg" width="20px" alt="">
                </button>
                <button onclick="sendMessage()"
                    class="bg-[#70FF75] px-5 lg:hidden block py-2 rounded-lg lg:ml-3 lg:mt-0 mt-2 text-slate-900 font-semibold font-inter mx-auto hover:bg-green-300 active:bg-green-400 focus:ring focus:ring-green-200 dark:bg-slate-300 dark:text-slate-800 dark:hover:text-slate-900 dark:hover:bg-slate-100">
                    Kirim
                </button>
            </div>  
        </div>

        <div class="text-center">
            <h1 class="text-robotoFlex font-bold text-2xl italic text-slate-800">Curahan Maidomu</h1>
        </div>

        <div id="tampil" class=" rounded-md mt-5 mb-10 max-w-3xl p-5 h-[40em] mx-auto overflow-y-scroll overflow-visible">      
        </div>


    </main>

    <script>
    const _badWord = ['Anjing','Babi','Kunyuk','Bajingan','Asu','Bangsat','Kampret','Kontol','Memek','Ngentot','Pentil','Perek','Pepek','Pecun','Bencong','Banci','Maho','Gila','Sinting','Tolol','Sarap','Setan','Lonte','Hencet','Taptei','Kampang','Pilat','Keparat','Bejad','Gembel','Brengsek','Tai','Anjrit','Bangsat','Fuck','Tetek','Ngulum','Jembut','Totong','Kolop','Pukimak','Bodat','Heang','Jancuk','Burit','Titit','Nenen','Bejat','Silit','Sempak','Fucking','Asshole','Bitch','Penis','Vagina','Klitoris','Kelentit','Borjong','Dancuk','Pantek','Taek','Itil','Teho','Bejat','Pantat','Bagudung','Babami','Kanciang','Bungul','Idiot','Kimak','Henceut','Kacuk','Blowjob','Pussy','Dick','Damn','Ass'];
    
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

    </script>
</body>
</html>