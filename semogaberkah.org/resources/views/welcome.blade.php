<?php
$dir = "documents/";
if(file_exists($dir)){
    $files = array_values(array_filter(scandir($dir), function($file){
        return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
    }));
}else{
    mkdir("documents/pdf",777,true);
    mkdir("documents/doc",777,true);
    mkdir("documents/img",777,true);
}

shuffle($files); // random
$files = array_slice($files, 0, 8); // ambil 8 saja

$documents = [];

foreach($files as $file){
    $documents[] = [
        "title" => pathinfo($file, PATHINFO_FILENAME),
        "file" => $file,
        "author" => "Admin"
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scribd Style Landing</title>

    <!-- jQuery CDN -->
    <script src="/lib/jquery.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #ffffff;
        }

        /* NAVBAR */
        .navbar {
            background: #23BDF5;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-weight: bold;
        }

        .navbar button {
            padding: 8px 16px;
            border: none;
            background: white;
            color: #23BDF5;
            border-radius: 5px;
            cursor: pointer;
        }

        /* HERO */
        .hero {
            height: 80vh;
            background: url("/images/BackGround/BackGround-Bursasoal.jpg") center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* overlay gelap */
        .overlay {
            background: rgba(0,0,0,0.6);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .hero-content {
            position: relative;
            color: white;
            text-align: center;
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* SEARCH BOX */
        .search-box {
            display: flex;
            justify-content: center;
        }

        .search-box input {
            padding: 12px;
            width: 60%;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-box button {
            padding: 12px 20px;
            border: none;
            background: #23BDF5;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        /* HOVER EFFECT */
        .search-box button:hover {
            background: #1aa3d4;
        }

        /* ANIMATION */
        .fade-in {
            display: none;
        }

        .doc-section {
            padding: 40px;
            background: #ffffff;
        }

        .doc-section h2 {
            margin-bottom: 20px;
        }

        .doc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .doc-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .doc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .doc-preview {
            height: 200px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .doc-preview span {
            color: #999;
        }

        .doc-info {
            padding: 10px;
        }

        .doc-title {
            font-size: 14px;
            font-weight: bold;
        }

        .doc-author {
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>



<!-- HERO -->
<div class="hero">
    <div class="overlay"></div>

    <div class="hero-content fade-in">
        <h1>Real knowledge, uploaded by real people.</h1>
        <p>
            Access millions of human-sourced documents, find the answers you're looking for,
            and dive deeper on any topic.
        </p>

        <div class="search-box">
            <input type="text" placeholder="What are you curious about?">
            <button id="searchBtn">Search</button>
        </div>
    </div>
</div>

<!-- DOCUMENT SECTION -->
<div class="doc-section">
    <h2>Trending Documents</h2>

    <div id="docContainer" class="doc-grid">
        <!-- diisi jQuery -->
    </div>
</div>



<script>
let documents = <?php echo json_encode($documents); ?>;

// FUNCTION RENDER (REUSABLE)
function renderDocuments(data, containerId){
    let container = $(containerId);
    container.empty();

    if(!data || data.length === 0){
        container.html("<p>Tidak ada dokumen tersedia</p>");
        return;
    }

    data.forEach(doc => {
        let card = `
            <div class="doc-card" data-file="${doc.file}">
                <div class="doc-preview">
                    <span>PDF</span>
                </div>
                <div class="doc-info">
                    <div class="doc-title">${doc.title}</div>
                    <div class="doc-author">By ${doc.author}</div>
                </div>
            </div>
        `;
        container.append(card);
    });
}

// MAIN INIT
$(document).ready(function(){

    // animasi hero
    $(".fade-in").fadeIn(1200);

    // SEARCH
    $("#searchBtn").on("click", function(){
        let keyword = $(".search-box input").val().trim();

        if(keyword === ""){
            alert("Masukkan kata kunci dulu!");
        } else {
            alert("Mencari: " + keyword);
        }
    });

    // RENDER DOCUMENT
    renderDocuments(documents, "#docContainer");

    // CLICK DOCUMENT (pakai event delegation)
    $(document).on("click", ".doc-card", function(){
        let file = $(this).data("file");

        if(file){
           window.location.href = "/viewer?file=" + encodeURIComponent(file);
        }
    });

});
</script>

</body>
</html>