<!DOCTYPE html>
<html>
<head>
    <title>Lihat Gudang</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1, h2 {
        margin-bottom: 10px;
    }

    .stock-container {
        display: flex;
        justify-content: space-between;
    }

    .stock-in, .stock-out, .current-stock {
        border: 1px solid #ccc;
        padding: 10px;
        flex: 1;
        margin: 0 10px;
    }

    #totalStockIn, #totalStockOut, #totalCurrentStock {
        font-weight: bold;
        color: green;
    }
    </style>

</head>
<body>
    <h1>Lihat Gudang</h1>

    <div class="stock-container">
        <div class="stock-in">
            <h2>Stock In</h2>
            <p>Total Stock In: <span id="totalStockIn">0</span></p>
        </div>

        <div class="stock-out">
            <h2>Stock Out</h2>
            <p>Total Stock Out: <span id="totalStockOut">0</span></p>
        </div>

        <div class="current-stock">
            <h2>Current Stock</h2>
            <p>Total Current Stock: <span id="totalCurrentStock">0</span></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
