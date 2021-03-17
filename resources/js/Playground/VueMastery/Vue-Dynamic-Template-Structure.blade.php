<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vue Mastery</title>
    <!-- Import Styles -->
    <link rel="stylesheet" href="{{ mix('css/vue-dynamic-mastery.css') }}" />
    <!-- Import Vue.js -->
    <!-- No Need Dynamic NPM Vue Compiler Version Webpack -->
  </head>
  <body>
    <div id="blade-dynamic-laravel-php">
      <div class="nav-bar"></div>


      <div class="cart"></div>


      <div class="product-display">
        <div class="product-container">
          <div class="product-image">
            <img alt="">
          </div>
          <div class="product-info">
            <h1></h1>
            <p></p>
            <p></p>

            <ul>
              <li></li>
            </ul>
            <!-- THIS ONE RIGHT HERE mouseover event -->
            <div
            class="color-circle"
            ></div>
            <!-- THIS ONE RIGHT HERE mouseover event -->
              <button type="button" name="button" class="button"
            >

            </button>
          </div>
        </div>
      </div>
    </div>

    <style media="screen">
    .disabledButton {
      background-color: #d8d8d8;
      cursor: not-allowed;
    }

    .className {
      background-color: #d8d8d8;
      cursor: not-allowed;
    }
    </style>

    <!-- Import Our Own Vue Scripts based on the Vue Lib Src Link  -->
    <script src="{{ mix('js/Vue.js') }}"></script>
  </body>
</html>
