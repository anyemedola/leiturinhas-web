<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leiturinhas</title>
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="POST" action="banco/save.php">
          <h2 class="title">Add a book</h2>
          <input class="form__input" type="text" placeholder="Book" name='book' />
          <input class="form__input" type="text" placeholder="Autor" name='autor' />
          <input class="form__input" type="number" placeholder="Rate" name='note' />
          <input class="form__input" type="file" placeholder="file" name='file' />
          <button type='submit' name='gravar' class="button submit">SAVE</button>
        </form>
      </div>

      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h62 class="title">Leiturinhas!</h62>
          <p class="description">A Website to keep the information of your read lifestyle.</p>
          <button class="switch__button button switch-btn">ADD BOOK</button>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>