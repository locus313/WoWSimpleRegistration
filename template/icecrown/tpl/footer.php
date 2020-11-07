<?php
/**
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright    Copyright (c) 2019 - 2022, MsaterkinG32 Team, Inc. (https://masterking32.com)
 * @link    https://masterking32.com
 * @Description : It's not masterking32 framework !
 **/

use SebastianBergmann\Timer\Timer;

?>
<div class="row">
    <div class="text-center box1">
        Developed by <a href="http://masterking32.com">MasterkinG32.CoM</a>
        - <?php echo "Load " . Timer::resourceUsage(); ?>
        <img src="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/images/ac_powered_by.png" class="logo" alt=""></a>
    </div>
</div>
</div>
</div>
</body>
</html>
