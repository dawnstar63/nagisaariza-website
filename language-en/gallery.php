<div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">

        	<?php
			    $files = scandir('/img/');
			    foreach($files as $file) {
			        if($file !== "." && $file !== "..") {
			            echo "<img src=".$file.">";
			        }
			    }
			?>

            <!-- <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="/img/piano-duo.jpg">
                    <img src="/img/piano-duo.jpg" alt="Piano Duo">
                </a>
            </div> -->

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>