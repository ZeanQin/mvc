<?php
// available vars:
?>
<html>
<body>
  <h2>This is the index page for all <?php echo strtolower($template->title); ?></h2>
  <?php foreach($template->things as $thing): ?>
  <?php echo $thing['name']. "<br/>"; ?>
  <?php endforeach ?>

</body>
</html>
