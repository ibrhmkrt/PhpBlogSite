<?php include_once "database.php" ?>
<div id="sidebar" class="four columns">

  <div class="widget widget_search">
            <h3>Search</h3>
            <form action="index.php" method="get">

               <input type="text" name="arama" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
               <input type="submit" value="" class="submit-search">

            </form>
         </div>

  <div class="widget widget_categories group">
    <h3>KATEGORILER</h3>
    <ul>
    <?php
     $sorgu = $db->query("SELECT kategoriler.id , kategoriler.Kategori_Adi,COUNT(*) as sayi
                          FROM kategoriler INNER JOIN main	ON
                          kategoriler.id=main.kategori_id
                          GROUP BY main.kategori_id ORDER BY sayi DESC" , PDO::FETCH_ASSOC);
     if($sorgu -> rowCount()){
       foreach ($sorgu as $row) {
     ?>
      <li><a href="index.php?kategori=<?php echo $row['id'] ?>" title=""><?php echo $row['Kategori_Adi'] ?></a> (<?php echo $row['sayi'] ?>)</li>
      <?php
        }
      }
      ?>
    </ul>
  </div>

  <div class="widget widget_text group">
    <h3>PHP HAKKINDA</h3>

    <p>PHP,ya da resmi adıyla "PHP: Hypertext Preprocessor"(PHP: Hipermetin önişlemcisi), HTML'e gömülebilen, sunucu tarafından işlenen kodlar yazabileceğiniz, tamamen açık kaynaklı bir dildir. Yani dinamik içerik oluşturmada tercih edebileceğiniz bir programlama dilidir.</p>

  </div>

  <div class="widget widget_tags">
         <h3>Etiket</h3>

         <div class="tagcloud group">

            <a href="#">PHP</a>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
            <a href="#">JAVA Script</a>
         </div>

      </div>


      <div class="widget widget_popular">
         <h3>Popular Post.</h3>

         <ul class="link-list">
            <li><a href="#">Sint cillum consectetur voluptate.</a></li>
            <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
            <li><a href="#">Fugiat minim eiusmod do.</a></li>
         </ul>

      </div>

</div> <!-- end sidebar -->

</div> <!-- end row -->

</div> <!-- end content-wrap -->
