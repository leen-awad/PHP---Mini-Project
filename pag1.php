<div class="container">
    <div class="row-fluid ">
    <!-- my php code which uses x-path to get results from xml query. -->
    <?php foreach ( $result as $elements) : ?>
        <div class="col-sm-4 ">
            <div class="card-columns-fluid">
                <div class="card  bg-light" style = "width: 22rem; " >
                    <img class="card-img-top"  src=" <?php echo $elements->pictures->picture[2]->filename  ; ?> " alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title"><b><?php echo $elements->advert_heading ?></b></h5>
                        <p class="card-text"><b><?php echo $elements->price_text ?></b></p>
                        <p class="card-text"><?php echo $elements->bullet1 ?></p>
                        <p class="card-text"><?php echo $elements->bullet2 ?></p>
                        <a href="#" class="btn btn-secondary">Full Details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div> <!--container div  -->
<!-- <div class="card" style="width: 18rem;">
  <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFXtIBZLsEhdQ/profile-displayphoto-shrink_400_400/0/1603582539193?e=1616630400&v=beta&t=g12-1HDT0IAKHVbD4nk7Ss3plhJSk9zLTS85WRrmcVg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
