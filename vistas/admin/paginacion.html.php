<nav aria-label="...">
  <ul class="pagination pagination-sm">
  <?php for($i=1; $i<=$num_paginas; $i++): ?>
    <li  class="<?php echo $i==$pagina?'active':'' ?> page-item" aria-current="page">
    <a class="page-link" href="?p=<?php echo $i?>"><?php echo $i?></a>
    </li>
    <?php endfor;?>
  </ul>
</nav>