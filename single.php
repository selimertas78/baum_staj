<?php include_once "header.php";
if (isset($_GET['id'])) {
  $icerik = tekilicerik($_GET['id']);
}
else {
  header("Location:single.php?id=1");
}
 ?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							<?php echo $icerik['baslik'] ?>
						</h2>

						<div class="entry-meta">
							<ul>
								<li><?php echo $icerik['zaman'] ?></li>
								<span class="meta-sep">&bull;</span>
								<li>
									<a href="#" title="" rel="category tag"><?php echo $icerik['ad'] ?></a>

								</li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $icerik['kuladi'] ?></li>
							</ul>
						</div>

					</header>

					<div class="entry-content-media">
						<div class="post-thumb">
							<!--<img src="images/m-farmerboy.jpg">-->
						</div>
					</div>

					<div class="entry-content">
						<p class="lead"><?php echo $icerik['icerik'] ?><p>
					</div>

					<p class="tags">
  			         <span>Tagged in </span>:
  				      <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
  			       </p>

  			       <ul class="post-nav group">
  			            <li class="prev"><a rel="prev" href="#"><strong>Önceki Makale</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
  				         <li class="next"><a rel="next" href="#"><strong>Sonraki Makale</strong> Morbi Elit Consequat Ipsum</a></li>
  			        </ul>

				</article>

				<!-- Comments
            ================================================== -->
            <div id="comments">

               <h3>5 Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist">

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Itachi Uchiha</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                     </div>

	                  </div>

                  </li>

                  <li class="thread-alt depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-03.png" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>John Doe</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
	                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
	                        tantas semper delicatissimi.</p>
	                     </div>

	                  </div>

                     <ul class="children">

                        <li class="depth-2">

                           <div class="avatar">
                              <img width="50" height="50" class="avatar" src="images/user-03.png" alt="">
                           </div>

                           <div class="comment-content">

	                           <div class="comment-info">
	                              <cite>Kakashi Hatake</cite>

	                              <div class="comment-meta">
	                                 <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
	                                 <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                              </div>
	                           </div>

	                           <div class="comment-text">
	                              <p>Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
	                              cursus a sit amet mauris</p>
	                           </div>

                           </div>

                           <ul class="children">

                              <li class="depth-3">

                                 <div class="avatar">
                                    <img width="50" height="50" class="avatar" src="images/user-03.png" alt="">
                                 </div>

                                 <div class="comment-content">

	                                 <div class="comment-info">
	                                    <cite>John Doe</cite>

	                                    <div class="comment-meta">
	                                       <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                                       <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                    </div>
	                                 </div>

	                                 <div class="comment-text">
	                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
	                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
	                                 </div>

                                 </div>

                              </li>

                           </ul>

                        </li>

                     </ul>

                  </li>

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-02.png" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Hinata Hyuga</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	                     </div>

                     </div>

                  </li>

               </ol> <!-- Commentlist End -->


               <!-- respond -->
               <div class="respond">

                  <h3>Leave a Comment</h3>

                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="">
  					   <fieldset>

                     <div class="group">
  						      <label for="cName">Name <span class="required">*</span></label>
  						      <input name="cName" type="text" id="cName" size="35" value="" />
                     </div>

                     <div class="group">
  						      <label for="cEmail">Email <span class="required">*</span></label>
  						      <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                     </div>

                     <div class="group">
  						      <label for="cWebsite">Website</label>
  						      <input name="cWebsite" type="text" id="cWebsite" size="35" value="" />
                     </div>

                     <div class="message group">
                        <label  for="cMessage">Message <span class="required">*</span></label>
                        <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                     </div>

                     <button type="submit" class="submit">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               </div> <!-- Respond End -->

            </div>  <!-- Comments End -->


   		</div> <!-- main End -->

      <?php include_once "sidebar.php"; ?>
      <?php include_once "footer.php"; ?>
