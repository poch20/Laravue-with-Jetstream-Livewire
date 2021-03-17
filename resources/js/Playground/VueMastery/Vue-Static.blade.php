<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vue Mastery</title>
    <!-- Import Styles -->
    <link rel="stylesheet" href="{{ asset('css/vue-static-mastery.css') }}" />
    <!-- Import Vue.js -->
    <!--script src="https://unpkg.com/vue@3.0.0-beta.12/dist/vue.global.js"></script-->
    <script src="https://unpkg.com/vue@next"></script>
  </head>
  <body>
    <div id="blade-static-laravel-php">
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
    <script>
    const app = Vue.createApp({

      data() {
        return {
        }
      },

      methods: {

      },

      computed: {

      }



    }).mount('#blade-static-laravel-php')

    </script>
  </body>
</html>
