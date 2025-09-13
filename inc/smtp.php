<?php
// 1. Add SMTP Settings Page under Settings Menu
add_action('admin_menu', function () {
    add_options_page(
        'SMTP Settings',
        'SMTP',
        'manage_options',
        'smtp-settings',
        'custom_smtp_settings_page'
    );
});

// 2. Register Settings
add_action('admin_init', function () {
    register_setting('smtp_settings_group', 'smtp_settings');
});

// 3. Settings Page Callback
function custom_smtp_settings_page() {
    $options = get_option('smtp_settings');
    ?>
    <div class="wrap">
        <h1>SMTP Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('smtp_settings_group'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row">SMTP Host</th>
                    <td><input type="text" name="smtp_settings[host]" value="<?php echo esc_attr($options['host'] ?? ''); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">SMTP Port</th>
                    <td><input type="text" name="smtp_settings[port]" value="<?php echo esc_attr($options['port'] ?? ''); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">Encryption</th>
                    <td>
                        <select name="smtp_settings[encryption]">
                            <option value="none" <?php selected($options['encryption'] ?? '', 'none'); ?>>None</option>
                            <option value="ssl" <?php selected($options['encryption'] ?? '', 'ssl'); ?>>SSL</option>
                            <option value="tls" <?php selected($options['encryption'] ?? '', 'tls'); ?>>TLS</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">SMTP Username</th>
                    <td><input type="text" name="smtp_settings[username]" value="<?php echo esc_attr($options['username'] ?? ''); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">SMTP Password</th>
                    <td><input type="password" name="smtp_settings[password]" value="<?php echo esc_attr($options['password'] ?? ''); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">From Email</th>
                    <td><input type="email" name="smtp_settings[from_email]" value="<?php echo esc_attr($options['from_email'] ?? ''); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">From Name</th>
                    <td><input type="text" name="smtp_settings[from_name]" value="<?php echo esc_attr($options['from_name'] ?? ''); ?>" class="regular-text"></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// 4. Apply SMTP Settings to PHPMailer
add_action('phpmailer_init', function ($phpmailer) {
    $settings = get_option('smtp_settings');

    if (!empty($settings['host']) && !empty($settings['username']) && !empty($settings['password'])) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = $settings['host'];
        $phpmailer->SMTPAuth   = true;
        $phpmailer->Port       = (int) $settings['port'];
        $phpmailer->Username   = $settings['username'];
        $phpmailer->Password   = $settings['password'];
        $phpmailer->SMTPSecure = $settings['encryption'] === 'none' ? '' : $settings['encryption'];
        $phpmailer->From       = $settings['from_email'] ?? $phpmailer->From;
        $phpmailer->FromName   = $settings['from_name'] ?? $phpmailer->FromName;
    }
});

?>