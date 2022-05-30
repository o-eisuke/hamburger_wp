<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="sass/style.css"> -->
  <title>front-page</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="l-container">

    <div class="zdo_drawer_bg"></div>

    <main class="l-main">

      <header class="l-header p-header">
        <h1 class="p-header__title c-title">Hamburger</h1>
        <form class="p-form">
          <input class="p-form__input c-input" type="text">
          <button class="p-form__button c-button">検索</button>
        </form>
        <button class="p-header__menu">
          Menu
        </button>
      </header>