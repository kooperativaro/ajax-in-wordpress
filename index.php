<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Formular</title>
    </head>
    <body>
        <form autocomplete="off" data-target="procesare-cerere" _js_procesare-cerere>
            <input name="message" placeholder="Mesaj" required type="text" _js_form-data>
            <button name="button">Trimite</button>
            <div class="response"></div>
        </form>
        <script src="<?php echo esc_url( get_theme_file_uri( 'script.js' . '?v=' . wp_get_theme()->get( 'Version' ) ) ); ?>"></script>
    </body>
</html>
