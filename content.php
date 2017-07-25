<!-- Content
================================================== -->

<div id="content-wrap">

 <div class="row">

   <div id="main" class="eight columns">
     <?php foreach (icerikgetir() as $icerik) { ?>
     <article class="entry">

       <header class="entry-header">

         <h2 class="entry-title">
           <a href="single.php?id=<?php echo $icerik['id'] ?>" title=""><?php echo $icerik['baslik']; ?></a>
         </h2>

         <div class="entry-meta">
           <ul>
             <li><?php echo $icerik['zaman']; ?></li>
             <span class="meta-sep">&bull;</span>
             <li><a href="#" title="" rel="category tag"><?php echo $icerik['ad']; ?></a></li>
             <span class="meta-sep">&bull;</span>
             <li><?php echo $icerik['kuladi']; ?></li>
           </ul>
         </div>

       </header>

       <div class="entry-content">
         <p><?php echo $icerik['icerik']; ?></p>
       </div>

     </article> <!-- end entry -->
     <?php } ?>
   </div> <!-- end main -->
