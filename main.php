<?php include_once "database.php" ?>
<div id="main" class="eight columns">
  <?php
  if (isset($_GET['kategori'])) {
    $sorgu = $db->query("SELECT * FROM main WHERE main.kategori_id=".$_GET['kategori']."  ORDER BY yazi_tarih DESC " , PDO::FETCH_ASSOC);
  }
  elseif (isset($_GET['arama'])) {
      $sorgu = $db->query("SELECT * FROM main WHERE yazi_icerigi LIKE '%".$_GET['arama']."%'  ORDER BY yazi_tarih DESC " , PDO::FETCH_ASSOC);
    }
  elseif (isset($_GET['tarih'])) {
      $sorgu = $db->query("SELECT * FROM main WHERE yazi_tarih LIKE '%".$_GET['tarih']."%'  ORDER BY yazi_tarih DESC " , PDO::FETCH_ASSOC);
      }
  else
    $sorgu = $db->query("SELECT * FROM main ORDER BY yazi_tarih DESC LIMIT 0,3 " , PDO::FETCH_ASSOC);

   if($sorgu -> rowCount()){
     foreach ($sorgu as $row) {
   ?>

  <article class="entry">

    <header class="entry-header">

      <h2 class="entry-title">
        <a href="single.php?gonderi=<?php echo $row['id'] ?>" title=""><?php echo $row['yazi_baslik'] ?></a>
      </h2>

      <div class="entry-meta">
        <ul>
          <li><?php echo $row['yazi_tarih'] ?></li>
          <span class="meta-sep">&bull;</span>
          <li><a href="#" title="" rel="category tag"><?php echo $row['yazi_kategori'] ?></a></li>
          <span class="meta-sep">&bull;</span>
          <li><?php echo $row['yazar'] ?></li>
        </ul>
      </div>

    </header>

    <div class="entry-content">
      <?php echo $row['yazi_icerigi'] ?>
    </div>

  </article> <!-- end entry -->



<?php
}
}
?>

</div> <!-- end main -->
