<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>
<div class="content_box1" style="line-height: 1.5;">
    <p>1. <?php elang(''); ?>First of all, you must create an account. The account is used to log into both the game and our website. Click
        here to open the registration page.</p>
    <p>2. <?php elang(''); ?>Install World of Warcraft. You can download it from here: <a href="https://mega.nz/file/lJwE3C6T#foGVjhD_3jt5PEG2r6XQA2BizAfF4j-8BaN2-dpEevI" target="_blank" style="color:red">Windows</a> <!-- or Mac. Make sure to upgrade to
        our current supported patch, which is 3.3.5 (build 12340). Patch mirrors can be found here. --> </p>
    <p>3. <?php elang(''); ?>Open up the "World of Warcraft" directory. The default directory is "C:\Program Files\World of Warcraft". When
        you\'ve found it, open up the directory called "data", then go into the directory called either enUS or enGB,
        depending on your client language.</p>
    <p>4. <?php elang(''); ?>Erase all text and change it to:</p>
    <p style="text-align: center;font-weight: bold;color:darkred">set
        realmlist <?php echo get_config('realmlist'); ?></p>
</div>
