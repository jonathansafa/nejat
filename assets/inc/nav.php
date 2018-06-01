<style>

</style>
<nav>
     <div class="nav-wrap">
        <div class="header-logo"> 
            <a href="https://nejattv.org">
                <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) {
               echo '<img title="TBN Nejat TV" src="https://nejattv.org/assets/img/tbn-nejat-tv-white.png" />';
                } else {
                    echo '<img title="TBN Nejat TV" src="https://nejattv.org/assets/img/tbn-nejat-tv-black.png" />'; 
                }
                ?>
            </a>
        </div>
         
        <div class="header-nav">
            <ul class="nav"> 
              <li><a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/store/">Resources</a></li>
              <li class="first"><a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="<?php echo (BASE_URL . 'about/mission/'); ?>">About Us</a>
                    <ul>
                        <li class="fir"><a href="<?php echo (BASE_URL . 'about/mission/'); ?>"  >Our Mission</a></li>
                        <li><a href="<?php echo (BASE_URL . 'about/statement/'); ?>"  >Statement of Faith</a></li>
                        <li><a href="<?php echo (BASE_URL . 'about/founder/'); ?>">Reza Safa</a></li>
                        <li><a href="<?php echo (BASE_URL . 'reach/countries/'); ?>">Countries</a></li> 
                    </ul>

                </li>
                <li><a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="https://nejattv.org/contact/">Contact</a></li>
            </ul>
        <a class="d-b <?php if(in_array($_SERVER['REQUEST_URI'], $options)) { echo 'white'; }?>" href="https://nejattv.org/donate/">Donate</a>
        <a class="d-b <?php if(in_array($_SERVER['REQUEST_URI'], $options)) { echo 'white'; }?> right" href="https://nejattv.org/watch/">Watch Live</a>
         
        </div>
         <div class="sidenavbar" style="display:none">
         <nav>

             <div id="nav-icon3">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </nav>
            <aside>
            <div class="scrolls">
              <ul class="nav"> 
              <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/store/">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Resources</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li>
              <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/about/mission">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li>
                   <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/about/statement">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Statement of Faith </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li>     
                <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/about/founder">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Reza Safa</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li> 
                <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="http://rezasafa.com/reach/countries">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Countries</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li>
               <li>
                <a <?php if (((($_SERVER['REQUEST_URI']) == $darkscheme)) or (($_SERVER['REQUEST_URI']) == $breaking)) echo 'class="white"'; ?> href="https://nejattv.org/contact/">
                  <div class="icon">
                    <img src="assets/img/icon.png" alt="" class="image_icon">
                  </div>
                  <div class="inner">
                    <h3>Contact</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </a>
              </li>
            </ul>
                <div class="toperer">
                    <a class="d-b <?php if(in_array($_SERVER['REQUEST_URI'], $options)) { echo 'white'; }?>" href="https://nejattv.org/donate/">Donate</a>
                    <a class="d-b <?php if(in_array($_SERVER['REQUEST_URI'], $options)) { echo 'white'; }?> " href="https://nejattv.org/watch/">Watch Live</a>
                </div>
                </div>
            </aside>
         </div>
         
        
    </div>
</nav>

<script>
    $(document).ready(function(){
    $("#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4").click(function(){
        $("aside").slideToggle("fast");
        $(this).toggleClass('active open');
    });
});   
</script>
<script>  
$(document).ready(function(){
   $('.togglers').click(function(){
       $('.opener').toggle();
   }); 
});
</script>


<script>  
$(document).ready(function(){
$("#nav-icon3").click(function(){
    $(".wrapper").toggleClass("hider_room");
});
});
</script>



