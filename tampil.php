<?php
require_once 'db.php';

$db = new Database();

$hasil = $db->out();


while ($row = $hasil->fetch_assoc()) {


?>

    <div class='rounded-lg shadow-lg max-w-3xl mb-10 bg-white mt-5 p-4 lg:mx-auto mx-5'>
        <p class=' text-slate-500 text-lg'><?= $row["isi"] ?></p>
        <div class='relative created-time mt-10 text-lg font-medium align-top'>
            <p class='absolute left-0 bottom-1'>
                <?php if (isset($_COOKIE["like-" . $row['id']])) { ?>
                    <span><button onclick='unLikeMessage("<?= $row["id"] ?>")'><i class="fa-solid fa-heart text-red-700"></i></button>
                        <?= $row["btnlike"] ?>
                    </span>
                <?php } else { ?>
                    <span><button onclick='likeMessage("<?= $row["id"] ?>")'><i class='fa-regular fa-heart text-slate-700'></i></button>
                        <?= $row["btnlike"] ?>
                    </span>
                <?php } ?>

                <?php if (isset($_COOKIE["unLike-" . $row['id']])) { ?>
                    <span class='ml-2'><button onclick='unDislikeMessage("<?= $row["id"] ?>")'><i class='fa-solid fa-thumbs-down text-slate-700'></i></button>
                        <?= $row["btndislike"] ?>
                    </span>
                <?php } else { ?>
                    <span class='ml-2'><button onclick='dislikeMessage("<?= $row["id"] ?>")'><i class='fa-regular fa-thumbs-down text-slate-700'></i></button>
                        <?= $row["btndislike"] ?>
                    </span>
                <?php } ?>

            </p>
        </div>
        <div class='relative created-time mt-7 text-sm font-medium align-top'>
            <p class='absolute right-0 bottom-1'><?= $row["waktu"] ?></p>
        </div>
    </div>
    </div>

<?php } ?>