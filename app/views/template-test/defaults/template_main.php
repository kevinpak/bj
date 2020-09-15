<body class="x-page">
  <?php
    $this->view->load('pages/header_view',$data);
  ?>
  <main class="main i-scroll-vert">
    <?php
      $this->view->load('pages/'.$template_view,$data);
    ?>
  </main>
  <?php
    $this->view->load('pages/footer_view',$data);
  ?>

</body>
