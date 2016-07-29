<style>
#icon-thirtysuns {
    background: transparent url( '<?php echo plugins_url( 'assets/thirtysuns_32.png', __FILE__ ); ?>' ) no-repeat;
}
</style>
<div class="wrap">
    
    <?php screen_icon('thirtysuns'); ?>
    
    <form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
    
    <?php settings_fields($plugin_id.'_options'); ?>
    
    <h2>30suns Settings</h2>
    <table class="widefat">
        <thead>
           <tr>
                       <th></th>
           </tr>
        </thead>
        <tfoot>
           <tr>
             <th><input type="submit" name="submit" value="Save Settings" class="button button-primary" style="" /></th>
           </tr>
        </tfoot>
        <tbody>
           <tr>
             <td style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
                 <label for="kkpo_quote">
                     <p>Your 30suns Username</p>
                 </label>
                     <p><input type="text" name="thirtysuns_username" value="<?php echo get_option('thirtysuns_username'); ?>" /></p>
                     <p>30suns makes it easy to start publishing service incidents on a status dashboard today. To get started:</p>
                     <ol>
                        <li>Sign up for your free trial account at <a target="_blank" href="https://30suns.com/register/">30suns.com/register/</a> and define your service(s).</li>
                        <li>Enter your username in the field above and click <strong>Save Settings</strong>.</li>
                        <li>Create a new page and insert the shortcode <code>[thirtysuns]</code>. We recommend using a simple slug for your page, something like <code>status</code>.</li>
                        <li>When you publish incident reports from your 30suns account they will show up immediately on your site's status page.</li>
                        <li>Mention us on <a target="_blank" href="https://twitter.com/ThirtySuns">Twitter</a> and we'll extend your free trial by 30 days!</li>

<a href="https://twitter.com/ThirtySuns" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ThirtySuns</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<a href="https://twitter.com/intent/tweet?screen_name=ThirtySuns&text=makes%20it%20easy%20to%20start%20publishing%20service%20incidents%20on%20a%20status%20dashboard%20today.%20Get%20your%20status%20page%20at%20http%3A%2F%2F30suns.com%2F" class="twitter-mention-button" data-size="large" data-related="ThirtySuns">Tweet to @ThirtySuns</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


                     </ol>
             </td>
           </tr>
        </tbody>
    </table>
    
    </form>
    
</div>
