<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <style>
        .text-bg-secondary {
            background-color: #FFB6C1; 
            color: white; 
            padding: 20px; 
            border-radius: 20px; 
            text-align: center; 
        }

        .card-container {
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-around; 
            gap: 25px; 
            padding: 30px;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 25rem; 
            padding: 15px;
            text-align: center;
        }

        .card img {
            width: 100%; 
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 2.0em;
            margin-bottom: 5px;
        }

        .btn {
            background-color: #808080;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #808080;
        }

        button {
            background-color: #808080;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #808080;
        }

        .detail-text {
            display: none;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="tampil.php" method="GET">
   <div align = "right">
    <button type="submit">Selanjutnya</button>
    <a href="logout.php" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin logout?')">Log out</a>
   </div>
    </form>
<div class="text-bg-secondary">
    <h1>BLOOMING WONDERS</h1>
</div>
<div class="card-container">
    <div class="card">
        <img src="melati.jpg" alt="Melati">
        <div class="card-body">
            <h5 class="card-title">MELATI</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('melati')">Detail bunga melati</button>
            <div id="melati" class="detail-text">
                <p>Melati putih (Jasminum sambac) adalah salah satu bunga nasional Indonesia dan simbol kesucian. Tumbuhan ini dapat tumbuh hingga ketinggian 2 meter dan digunakan dalam berbagai tradisi budaya.
                     merawat bunga melati ialah Menyiram Bunga melati membutuhkan air yang cukup untuk tumbuh dan berbunga,Memberikan Pupuk yang Tepat Bunga melati juga membutuhkan nutrisi yang seimbang untuk tumbuh dan berbunga, Menjaga Kelembapan Tanah Bunga melati menyukai tanah yang lembab tetapi tidak basah.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="alamanda.jpg" alt="Alamanda">
        <div class="card-body">
            <h5 class="card-title">ALAMANDA</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('alamanda')">Detail bunga alamanda</button>
            <div id="alamanda" class="detail-text">
                <p>Alamanda adalah tanaman yang berasal dari Amerika Tengah dan Selatan, dikenal dengan bunga berbentuk terompet besar berwarna kuning cerah.cara merawat bunga alamanda ialah Lakukan penyiraman secara rutin dengan mengunakan gembor hingga seluru bagian tanaman dan media tanamnya basah,Selain penyiraman, lakukan pemupukan secara rutin yaitu setiap sebulan sekali agar nutrisi yang dibutuhkan untuk pertumbuhan dan perkembangan tanaman bunga alamanda terpenuhi. Selain itu lakukan pula pemberian hormon perangsang bunga agar bunga tumbuh lebih cepat setiap interval 2 minggu sekali.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="mawar.webp" alt="Mawar">
        <div class="card-body">
            <h5 class="card-title">MAWAR</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('mawar')">Detail bunga mawar</button>
            <div id="mawar" class="detail-text">
                <p>Mawar adalah bunga simbol cinta yang dikenal di seluruh dunia, memiliki lebih dari 100 spesies dan beragam warna.cara merawat bunga mawar ialah Menyiram dengan teratur,Pengendalian Hama dan Gulma,Pemangkasan.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="kamboja.jpg" alt="Kamboja">
        <div class="card-body">
            <h5 class="card-title">KAMBOJA</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('kamboja')">Detail bunga kamboja</button>
            <div id="kamboja" class="detail-text">
                <p>Kamboja adalah tanaman hias populer dengan bunga yang wangi, sering ditemui di pekarangan rumah dan pemakaman.cara merawat kamboja ialah Siram secara rutin,Pilih tempat tanam yang tepat,Pastikan kebutuhan akan sinar matahari cukup. </p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="lily.jpg" alt="Lily">
        <div class="card-body">
            <h5 class="card-title">LILY</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('lily')">Detail bunga lily</button>
            <div id="lily" class="detail-text">
                <p>Lily dikenal sebagai simbol kesucian dan kesempurnaan, sering digunakan dalam acara keagamaan dan pernikahan.cara merawat bunga lily ialah Siram dengan baik dan berikan pupuk,letakkan pot tanaman di tempat yang mendapat sinar matahari cukup,</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="tulip.webp" alt="Tulip">
        <div class="card-body">
            <h5 class="card-title">TULIP</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('tulip')">Detail bunga tulip</button>
            <div id="tulip" class="detail-text">
                <p>Tulip, bunga nasional Belanda, merupakan simbol kemakmuran dan ketertiban. Ada lebih dari 100 spesies tulip.cara merawat bunga tulip ialah Pilihlah tempat yang teduh,Pilihlah tanah berpasir yang berdaya serap baik dengan pH 6 hingga 6,5,Sirami tulip hanya pada musim kemarau,Jangan biarkan tulip tergenang air.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="anggrek.jpg" alt="Anggrek">
        <div class="card-body">
            <h5 class="card-title">ANGGREK</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('anggrek')">Detail bunga anggrek</button>
            <div id="anggrek" class="detail-text">
                <p>Anggrek adalah bunga eksotis yang sangat bervariasi, dengan keindahan yang mengagumkan, sering digunakan sebagai tanaman hias.cara merawat bunga anggrek ialah Siapkan media tanam yang cepat mengalirkan air khusus untuk anggrek,Letakkan pot anggrek di dekat jendela yang menghadap ke selatan atau timur,Berikan pupuk sebulan sekali saat anggrek sedang berbunga.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="telang.jpg" alt="telang">
        <div class="card-body">
            <h5 class="card-title">TELANG</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('telang')">Detail bunga telang</button>
            <div id="telang" class="detail-text">
                <p>Tanaman telang atau Clitoria ternatea biasanya dikenal sebagai tanaman merambat yang dapat ditemukan di kebun atau tumbuh secara liar. Namun akhir – akhir ini mulai banyak dikenal masyarakat sebagai salah satu tanaman herbal yang berkhasiat untuk kesehatan tubuh.cara merawat bunga telang ialah Perhatikan jarak tanam, Pemupukan secara berkala,temperatur harus tepat.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="peony.jpg" alt="peony">
        <div class="card-body">
            <h5 class="card-title">PEONY</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('peony')">Detail bunga peony</button>
            <div id="peony" class="detail-text">
                <p>Mudan atau peoni (genus Paeonia) adalah genus tunggal untuk tanaman hias yang tergolong keluarga Paeoniaceae. Tanaman botan merupakan tanaman rempah yang tergolong tumbuhan tahunan (perenial). Tinggi mulai dari 50 cm hingga 1,5 meter. Tinggi tanaman yang merupakan tumbuhan semak dapat mencapai 2-3 meter. Tanaman berbunga di akhir musim semi sampai awal musim panas. Bunga botan ada yang berbau harum, warnanya bisa merah, merah tua, putih, merah jambu, kuning, atau ungu.cara merawat bunga peony ialah Menanam di tempat yang mendapat sinar matahari penuh dan berangin agar tidak terlalu lembap,Menjaga tanaman dari serangga atau hama lainnya yang dapat merusak pertumbuhan bunga peony.</p>
        </div>
    </div>
</div>
<div class="card">
        <img src="kertas.jpg" alt="kertas">
        <div class="card-body">
            <h5 class="card-title">KERTAS</h5>
            <p class="card-text"></p>
            <button class="btn" onclick="showDetail('kertas')">Detail bunga kertas</button>
            <div id="kertas" class="detail-text">
                <p>dengan nama ilmiah bougenvillia spectabillis adalah tanaman hias populer. Bentuknya berupa pohon kecil yang sukar tumbuh tegak. Keindahannya berasal dari seludang bunganya yang berwarna cerah dan menarik perhatian karena tumbuh dengan rimbunnya. Seludang bunga ini kerap dianggap sebagai bagian bunga, walaupun bunganya yang benar adalah bunga kecil yang terlindung oleh seludang. Seludang ini mengandung zat yang baik untuk kesehatan.cara merawat bunga kertas ialah Rutin melakukan pemangkasan,Menyiram tanaman dengan takaran air yang pas,Mempersiapkan media tanam.</p>
    </div>
</div>
<script>
    function showDetail(id) {
        var details = document.querySelectorAll('.detail-text');
        details.forEach(function(detail) {
            detail.style.display = 'none';
        });
        var selectedDetail = document.getElementById(id);
        selectedDetail.style.display = 'block';
    }
</script>
</body>
</html>