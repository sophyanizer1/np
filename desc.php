<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descrição do Produto</title>
    <link rel="stylesheet" type="text/css" href="css-desc/style.css">
</head>
<body>
    <div class="product-description">
        <div class="product-images">
            <img src="img/C1.jpeg" alt="Product Image 1">
            <img src="img/C2.jpeg" alt="Product Image 2">
            <img src="img/C3.jpeg" alt="Product Image 3">
            <img src="img/C2.jpeg" alt="Product Image 4">
            <img src="img/C3.jpeg" alt="Product Image 5">
        </div>
        <div class="product-thumbnails">
            <img src="img/C1.jpeg" alt="Thumbnail 1">
            <img src="img/C2.jpeg" alt="Thumbnail 2">
            <img src="img/C3.jpeg" alt="Thumbnail 3">
            <img src="img/C2.jpeg" alt="Thumbnail 4">
            <img src="img/C3.jpeg" alt="Thumbnail 5">
        </div>
        <div class="product-info">
            <h1>Nome do Produto</h1>
            <p>Descrição do Produto: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a id="back-button" href="#">Voltar</a>
        </div>
    </div>

    <script>
         const productImages = document.querySelectorAll('.product-images img');
        const productThumbnails = document.querySelectorAll('.product-thumbnails img');
        const backButton = document.getElementById('back-button');

        // Exibir a primeira imagem no carrossel.
        productImages[0].style.display = 'block';

        productThumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                // Esconder todas as imagens do carrossel.
                productImages.forEach(image => (image.style.display = 'none'));

                // Exibir a imagem correspondente à miniatura clicada.
                productImages[index].style.display = 'block';
            });
        });

        backButton.addEventListener('click', () => {
            // Você pode adicionar a ação de voltar para a página anterior aqui.
        });
    </script>
</body>
</html>
