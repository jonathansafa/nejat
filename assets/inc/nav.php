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
    </div>
</nav>