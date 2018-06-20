<div class="flow-text hide" id="pagepiling">
    <div id="share" class=""></div>
    <!--SECTION1-->
    <div class="page" id="section1">
        <div id="parent-wide">
            <div id="wide" class="">
                <h1 class="title"> Sonia Ziegler</h1>
                <div id="card-panel" class="card-panel center-align transparent">
                    <span class="">
                        <h4 class="center-align"> Inspiring the creative community</h4>
                       @domeofvisions | 9. October to 21. October 2017 
                    </span>
                </div>
            </div>
        </div>
        <div id="bot" class="bot center"></div>
    </div>
    <!--SECTION2-->
    <div class="page pp-scrollable" id="section2">
        <div id="header">
            <ul id="panel" class="collection with-header">
                <li class="collection-header grey lighten-4">
                    <span class="light-blue accent-3 white-text badge">300,-/pr. photo</span>
                    <h4>India Skate</h4>
                </li>
                <li class="collection-item grey lighten-4">Alternative culture</li>
            </ul>

            <div class="gallery-wrap">
                <div id="gallery" class="">
                    <?php
                        $imgdir="assets/img/dir1";
                    #$thumbdir="assets/img/dir1-t";
                        $imgsrc="/assets/img/dir1/";
                    #$thumbsrc="/assets/img/dir1-t/";
                        $images=scandir($imgdir);
                    #$thumbs=scandir($thumbdir);
                        shuffle($images);
                        $ignore = Array(".", "..");
                        foreach($images as $image){
                            if(!in_array($image, $ignore)){
                                echo "<a href='#'>";
                                echo "<img alt='' src='' data-image='".$imgsrc.$image."' data-description='' style='display:none'>";
                                echo "</a>"; 
                            }
                        }
                    # foreach(array_combine($images, $thumbs) as $image => $thumb) {
                    #     if(!in_array($image, $ignore)) {
                    #         if(!in_array($thumb, $ignore)) {
                    #             echo " <img id='materialboxed' class='materialboxed' width='250' src='".$imgsrc.$image."'>";
                    #         }
                    #     }
                    # }
                    ?>
                </div>
            </div>

            <ul id="panel" class="collection with-header ">
                <li class="collection-header grey lighten-4">
                    <span class="light-blue accent-3 white-text badge">300,-/pr. photo</span>
                    <h4>Light Painting</h4>
                </li>
                <li class="collection-item grey lighten-4">Shape it anyway you wish</li>
            </ul>
            <div class="gallery-wrap">
                <div id="gallery2">
                    <?php                         
                        $imgdir="assets/img/dir2";
                    #$thumbdir="assets/img/dir1-t";
                        $imgsrc="/assets/img/dir2/";
                    #$thumbsrc="/assets/img/dir1-t/";
                        $images=scandir($imgdir);
                    #$thumbs=scandir($thumbdir);
                        shuffle($images);
                        $ignore = Array(".", "..");
                        foreach($images as $image){
                            if(!in_array($image, $ignore)){
                                echo "<a href='#'>";
                                echo "<img alt='' src='' data-image='".$imgsrc.$image."' data-description='' style='display:none'>";
                                echo "</a>"; 
                            }
                        } 
                        ?>
                </div>
            </div>

            <ul id="panel" class="collection with-header ">
                <li class="collection-header grey lighten-4">
                    <span class="light-blue accent-3 white-text badge">300,-/pr. photo</span>
                    <h4>Double exposure</h4>
                </li>
                <li class="collection-item grey lighten-4">See life from a different angle</li>
            </ul>
            <div class="gallery-wrap">
                <div id="gallery3">
                    <?php                         
                        $imgdir="assets/img/dir3";
                    #$thumbdir="assets/img/dir1-t";
                        $imgsrc="/assets/img/dir3/";
                    #$thumbsrc="/assets/img/dir1-t/";
                        $images=scandir($imgdir);
                    #$thumbs=scandir($thumbdir);
                        shuffle($images);
                        $ignore = Array(".", "..");
                        foreach($images as $image){
                            if(!in_array($image, $ignore)){
                                echo "<a href='#'>";
                                echo "<img alt='' src='' data-image='".$imgsrc.$image."' data-description='' style='display:none'>";
                                echo "</a>"; 
                            }
                        } 
                    ?>
                </div>
            </div>

            <div id="info_sz">
                <div id="info_sz_narrow">
                    <div class="card-panel no-shadow transparent">
                        <span class="">
                            Around the age of 17, Sonia started getting a great fascination for the art of photography, and soon after her career escalated vividly, due to her talent and a great deal of charm. She had only worked with a camera a few times before, but at the Swedish skateboarding high school, Bryggeriets Gymnasium, she got an eye for photography and started experimenting through assignments. 
                        </span>
                    </div>
                </div>
                <div id="info_sz_wide">
                    <div class="card-panel no-shadow transparent">
                        <span class="">
                            She’s been involved in several exhibitions, been interviewed for various platforms, got her photos published in magazines globally and won photo awards. As an open minded and open hearted individual, curious to the lifes and wonders of all cultures spread across the globe, she travels the world fiercely armed with her camera.
                        </span>
                    </div>
                </div>
            </div>

            <!--<ul id="infoMenu">
                <li> Blog spot | </li>
                <li>Copyleft <span class="copyleft">&copy;</span> 2017 ventsislav.nurkov@gmail.com </li>
            </ul>-->
            <footer class="page-footer light-blue accent-3">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Information</h5>
                            <p class="grey-text text-lighten-4">The whole exhibition is available for sale. Large print copies can be ordered <a class="grey-text text-lighten-3" target="_blank" href="http://domeofvisions.dk/">@domeofvisions</a> between 9. and 21. October</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">References</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" target="_blank" href="http://domeofvisions.dk/">Official @domeofvisions</a></li>
                                <li><a class="grey-text text-lighten-3 modal-trigger" href="#modal1">Contact Sonia</a></li>
                                <li><a class="grey-text text-lighten-3 modal-trigger" href="#modal2">Contact the developer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2017 | Sonia Ziegler
                        <a class="grey-text text-lighten-4 right" target="_blank" href="https://soniaziegler.com/">Blog Spot</a>
                    </div>
                </div>
            </footer>

        </div>
        <!-- END OF HEADER -->
    </div>
    <!-- END OF PAGE -->
</div>
<!-- END OF PILE -->
