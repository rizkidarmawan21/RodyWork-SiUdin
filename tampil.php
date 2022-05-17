<?php 
    require_once 'db.php';

    $db=new Database();
    
    $hasil=$db->out();


    while ($row=$hasil->fetch_assoc()){
        echo
        "<div class='rounded-lg shadow-lg max-w-3xl mb-10 bg-white mt-5 p-4 lg:mx-auto mx-5'>
            <p class= ' text-slate-500'>".$row["isi"]."</p>
            <div class='relative created-time mt-10 text-lg font-medium align-top'>
                <p class='absolute left-0 bottom-1'><span><button onclick='likeMessage(".$row["id"].")'><i class='fa-regular fa-heart text-slate-700'></i></button>
                        ".$row["btnlike"]."</span><span class='ml-2'><i class='fa-solid fa-thumbs-down text-slate-700'></i>
                        1K</span></p>
            </div>
            <div class='relative created-time mt-7 text-sm font-medium align-top'>
                <p class='absolute right-0 bottom-1'>".$row["waktu"]."</p></div>
            </div>
        </div>"; 
    }
?>