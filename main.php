<?php 
$courses = getcourse();
foreach ($courses as $key => $course) {
    # code...
    ?>
    

<article id="post-4137" class="post-4137 post type-post status-publish format-standard hentry category-statistics category-university-of-guelph">
            <div class="post-wrapper hentry-inner">
            <div class="entry-container">
            <header class="entry-header">
            <div class="entry-meta">
            <span class="cat-links"><span class="screen-reader-text">Cat Links </span><a href="#" rel="category tag"><?php echo $course['course_title'] ?></a>, <a href="#" rel="category tag"><?php echo $course['course_university'] ?></a></span> </div>
            <h2 class="entry-title"><a href="https://uni-sub.com/2022/02/14/mathematics-statistics-phd/" rel="bookmark"><?php echo $course['course_title'] ?></a></h2>
            <div class="entry-meta">
            <span class="posted-on"><span class="screen-reader-text"> Posted on </span><a href="#" rel="bookmark"><time class="entry-date published updated"><?php echo $course['created_date'] ?></time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="#"><?php echo $course['postedby'] ?></a></span></span> </div>
            </header>
            <div class="entry-summary">
            <p>Mathematics &amp; Statistics (PhD) University of Guelph SITE DEGREE DURATION Campus based PhD 3-4 years OVERVIEW Mathematics &amp; Statistics (PhD)</p>
            <p><a href="details.php?course=<?php echo $course['course_id'] ?>" class="more-link">Continue reading<span class="screen-reader-text">Mathematics &#038; Statistics (PhD)</span></a></p>
            </div>
            </div>
            </div>
</article>
    
    
    
    
    <?php
}

?>
