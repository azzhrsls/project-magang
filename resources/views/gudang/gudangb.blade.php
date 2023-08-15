<!DOCTYPE html>
<html>
<head>
    <title>Lihat Gudang B</title>
    <style>
        /* Gaya untuk tampilan gudang */
        .gudang {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .gudang h3 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }
        /* Gaya untuk tampilan stokin, stokout, dan stok barang */
        .stok {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .stok h4 {
            margin-top: 0;
            font-size: 16px;
            color: #555;
        }
        .stok ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .stok li {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Lihat Gudang B</h1>
    <div class="gudang">
        <h3>Gudang B</h3>
        <div class="stok">
            <h4>Stok In</h4>
            <ul id="stokInGudangB">
                <!-- Data stokin akan ditambahkan di sini menggunakan JavaScript -->
            </ul>
        </div>
        <div class="stok">
            <h4>Stok Out</h4>
            <ul id="stokOutGudangB">
                <!-- Data stokout akan ditambahkan di sini menggunakan JavaScript -->
            </ul>
        </div>
        <div class="stok">
            <h4>Stok Barang</h4>
            <ul id="stokBarangGudangB">
                <!-- Data stok barang akan ditambahkan di sini menggunakan JavaScript -->
            </ul>
        </div>
    </div>

    <script>
        async function fetchStokInData() {
            const response = await fetch('/get-stok-in'); // Mengambil data dari endpoint API
            const data = await response.json();
            const stokInList = document.getElementById('stokInGudangB');

            data.forEach(item => {
                const li = document.createElement('li');
                li.textContent = `${item.nama_barang}: ${item.jumlah} pcs`;
                stokInList.appendChild(li);
            });
        }

        fetchStokInData(); // Panggil fungsi untuk mengambil data saat halaman dimuat
    </script>
</body>
</html>
