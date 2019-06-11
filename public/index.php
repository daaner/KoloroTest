<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>

    <!-- BS4 grid -->
    <!-- Макеты будут разрабатываться по похожей сетке -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css"/>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  </head>
  <body>


    <!-- Content -->

    <section class="contact">
      <div class="container-fluid">
        <div class="row">

          <div class="col">
            <?php
              //maps
              include './blocks/contact_map.php';
            ?>
          </div>

          <div class="col">
            contact data
          </div>

        </div>
      </div>
    </section>

  <script type="text/javascript" src="/js/script.js"></script>
  </body>
</html>
