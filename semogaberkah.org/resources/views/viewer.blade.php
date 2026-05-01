<?php
$file = request('file');
$pdfUrl = asset("documents/Pdf/" . $file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Viewer</title>

    <!-- PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

    <style>
        body {
            margin: 0;
            display: flex;
            font-family: Arial;
            background: #111;
            color: white;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            background: #1a1a1a;
            padding: 20px;
        }

        .sidebar h3 {
            margin-bottom: 10px;
        }

        .sidebar p {
            font-size: 14px;
            color: #ccc;
        }

        .btn {
            display: block;
            margin-top: 15px;
            padding: 10px;
            background: #23BDF5;
            text-align: center;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }

        /* MAIN */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* TOPBAR */
        .topbar {
            background: #222;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .controls button {
            margin: 0 5px;
            padding: 5px 10px;
            background: #23BDF5;
            border: none;
            color: white;
            cursor: pointer;
        }

        /* PDF VIEW */
        #viewer {
            flex: 1;
            overflow-y: scroll;
            padding: 20px;
            background: #2c2c2c;
        }

        canvas {
            display: block;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>

<?php
$file = request('file');
$pdfUrl = asset("documents/Pdf/" . $file);
?>

<!-- SIDEBAR -->
<div class="sidebar">
    <h3>Document</h3>
    <p><?php echo $file; ?></p>

    <a href="<?php echo $pdfUrl; ?>" class="btn" download>Download</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">
        <div>PDF Viewer</div>
        <div class="controls">
            <button id="zoomIn">+</button>
            <button id="zoomOut">-</button>
        </div>
    </div>

    <!-- PDF -->
    <div id="viewer"></div>
</div>

<script>
const url = "<?php echo $pdfUrl; ?>";

pdfjsLib.GlobalWorkerOptions.workerSrc =
"https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";

let scale = 1.2;
let pdfDoc = null;

const container = document.getElementById("viewer");

// RENDER FUNCTION
function renderPDF(){
    container.innerHTML = "";

    for(let i = 1; i <= pdfDoc.numPages; i++){
        pdfDoc.getPage(i).then(page => {

            const viewport = page.getViewport({ scale });

            const canvas = document.createElement("canvas");
            const ctx = canvas.getContext("2d");

            canvas.width = viewport.width;
            canvas.height = viewport.height;

            container.appendChild(canvas);

            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }
}

// LOAD PDF
pdfjsLib.getDocument(url).promise.then(pdf => {
    pdfDoc = pdf;
    renderPDF();
});

// ZOOM
document.getElementById("zoomIn").onclick = function(){
    scale += 0.2;
    renderPDF();
};

document.getElementById("zoomOut").onclick = function(){
    scale -= 0.2;
    renderPDF();
};
</script>

</body>
</html>