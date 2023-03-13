<?php
/*
 * Plugin Name: plugin majidi
 * Description: wahad l plugin
 * Version: 1.0
 * Author: majidi
 * Author URI: majidi.com
 * License: GPL2
 */

 add_action( 'admin_menu', 'register_feedback_plugin_menu_page' );


 function register_feedback_plugin_menu_page() {
    add_menu_page(
        'Feedback Plugin',
        'Feedback Plugin',
        'manage_options',
        'feedback-plugin',
        'feedback_plugin_menu_page',
        'dashicons-feedback',
        90
    );
}



function feedback_plugin_menu_page() {
    ?>
    <div class="wrap">
        <h1>Feedback Plugin</h1>
        <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <input type="hidden" name="action" value="save_feedback">
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row"><label for="feedback_rating">Note (obligatoire)</label></th>
                        <td>
                            <select name="feedback_rating" id="feedback_rating" required>
                                <option value="">Sélectionner une note</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="feedback_comment">Remarque (obligatoire)</label></th>
                        <td><textarea name="feedback_comment" id="feedback_comment" rows="5" required></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="feedback_post_id">ID de post ou de page (obligatoire)</label></th>
                        <td><input type="text" name="feedback_post_id" id="feedback_post_id" required></td>
                    </tr>
                </tbody>
            </table>
            <?php wp_nonce_field( 'save_feedback', 'feedback_nonce' ); ?>
            <?php submit_button( 'Envoyer le feedback' ); ?>
        </form>
    </div>
    <?php
}
add_action( 'admin_post_save_feedback', 'save_feedback_data' );
add_action( 'admin_post_nopriv_save_feedback', 'save_feedback_data' );

function save_feedback_data() {
    if ( ! isset( $_POST['feedback_nonce'] ) || ! wp_verify_nonce( $_POST['feedback_nonce'], 'save_feedback' ) ) {
        wp_die( 'Erreur de sécurité. Veuillez réessayer.' );
    }

    $rating = sanitize_text_field( $_POST['feedback_rating'] );
    $comment = sanitize_text_field( $_POST['feedback_comment'] );
    $post_id = absint( $_POST['feedback_post_id'] );

    global $wpdb;

    $table_name = $wpdb->prefix . 'feedback_data';

    $data = array(
        'rating' => $rating,
        'comment' => $comment,
        'post_id' => $post_id,
        'created_at' => current_time( 'mysql' ),
    );

    $wpdb->insert( $table_name, $data );

    wp_redirect( get_permalink( $post_id ) );
    exit;
}


?>