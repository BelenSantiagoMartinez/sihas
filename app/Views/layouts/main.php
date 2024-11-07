<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Iconos (FontAwesome) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Incluir Header -->
    <?= $this->include('layouts/header'); ?>

    <!-- Contenido Principal -->
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <!-- Incluir Footer -->
    <?= $this->include('layouts/footer'); ?>

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
