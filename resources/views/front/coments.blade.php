<?php loadPart('header',$data) ?>

    
    <div class="content">
    <!-- Blog coments Start -->
    <div class="container py-5 px-2 bg-white">
        <div class="row px-4">
            <div class="col-12">
                <img class="img-fluid mb-4" src="img/logo.jpg" alt="Image">
                <h2 class="mb-3 font-weight-bold">Nonumy ipsum takimata et sanct</h2>
                <div class="d-flex">
                    <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</p>
                    <p class="mr-3 text-muted"><i class="fa fa-folder"></i> Web Design</p>
                    <p class="mr-3 text-muted"><i class="fa fa-comments"></i> 15 Comments</p>
                </div>
                <p>Clita duo sadipscing amet ea ut kasd amet dolore, sed erat at dolore vero tempor et sit amet, amet amet elitr et consetetur ea duo. Gubergren tempor rebum clita at sit diam. Ea sadipscing voluptua et sit diam diam sed, gubergren magna ipsum lorem clita dolores nonumy dolor. Gubergren duo invidunt elitr amet labore dolores justo sanctus nonumy. Accusam diam tempor at ea clita dolores dolor et ipsum, dolor voluptua consetetur gubergren sit, no consetetur kasd vero invidunt clita dolore elitr eos, accusam amet et labore sed sadipscing accusam labore dolores. Eirmod no lorem sed dolor nonumy consetetur tempor sed.</p>
            </div>
            <div class="col-12 py-4">
                <h3 class="mb-4 font-weight-bold">التعليقات 3</h3>
                
                <?php foreach ( [1,2,3] as $i ): ?>
                    <div class="media mb-4">
                        <img src="img/logo.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        <div class="media-body">
                            <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="btn btn-sm btn-light">رد</button>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-12">
                <h3 class="mb-4 font-weight-bold">اكتب لنا تعليق من فضلك</h3>
                <form methoad="post" action="/coments">
                    <div class="form-group">
                        <label for="coment">اترك تعليق</label>
                        <textarea id="coment" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ارسال" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Blog coments End -->
</div>
<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
<?php loadPart('footer') ?>
