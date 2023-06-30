<?php
require_once('lib/htm.php');
require_once('lib/htmUsers.php');

$tabTitle = 'Cedar Rules - Cedar';

printHeader(0);

$get_user = $dbc->prepare('SELECT * FROM users WHERE user_id = ? LIMIT 1');
$get_user->bind_param('i', $_SESSION['user_id']);
$get_user->execute();
$user_result = $get_user->get_result();
$user = $user_result->fetch_assoc();
echo '<div id="sidebar" class="general-sidebar">';
userContent($user, "");
sidebarSetting();
?>
</div>

<div class="main-column" id="help">
    <div class="post-list-outline">
        <h2 class="label">Cedar Rules</h2>
        <div class="help-content">
            <h2>Spam</h2>
            <p>Please refrain from posting excessively. Following, Yeahing, and Nahing in a short period of time also counts as spam.</p>
            <h2>Age</h2>
            <p>You must be 13 years or older to use Cedar. Extreme lack of maturity is prohibited as well. If you are caught using Cedar underaged, you will be banned. No questions asked.</p>
            <h2>Alting</h2>
            <p>You may only create 1 Cedar account. Creating alternate accounts will result in a ban.</p>
            <h2>NSFW/NSFL Content</h2>
            <p>Posting NSFW/NSFL content will result in a ban. However, it is allowed in messages, but only if the other person is okay with it.</p>
            <h2>Harassment</h2>
            <p>Harassment will not be tolerated, if a user feels they are being harassed, they need to provide screenshots, harassment can include: aggressive or offensive sexual comments, racial slurs, dox threats, hack threats, threats of any kind that can be harmful (Threatening their life), Admins will take action based on screenshots ONLY, false reports of harassment may be ignored.</p>
            <h2>Ear Rape</h2>
            <p>Posting ear rape to intentionally annoy others will result in an IP ban.</p>
            <h2>Doxxing</h2>
            <p>Refrain from posting someone's private information. They probably don't want the public to see that.</p>
            <h2>Illegal Discussion</h2>
            <p>You are allowed to have an opinion, and post about it. However, if you are going to discuss illegal topics such as plotting a murder, ddos, rape, etc., you will most likely be banned and a complaint may be filed against you.</p>
        </div>
    </div>
</div>