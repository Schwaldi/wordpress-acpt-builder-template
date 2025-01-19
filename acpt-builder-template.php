<?php

/**
 * Template Name: acpt-builder-template
 */
get_header();
    
if (acpt_field_has_blocks(['post_id' => get_the_ID(), 'box_name' => 'builder', 'field_name' => 'sections'])) {
    // Das gesamte Array mit "blocks" laden
    $blocks = get_acpt_field([
        'post_id'   => get_the_ID(),
        'box_name'  => 'builder',
        'field_name'=> 'sections'
    ]);

    // Sicherstellen, dass wir ein Array haben und "blocks" existiert
    if(!empty($blocks['blocks']) && is_array($blocks['blocks'])) {

        // Durch das Array iterieren: jeder $singleBlock hat einen Schlüssel (z.B. 'hero')
        foreach ($blocks['blocks'] as $singleBlock) {

            // Den Block-Typ ermitteln. Da du weißt, dass es genau einen Schlüssel gibt:
            // - key($singleBlock) gibt diesen Schlüssel zurück
            //   oder: $blockKeys = array_keys($singleBlock); $blockType = $blockKeys[0];
            $blockType = key($singleBlock);

            switch ($blockType) {
                case 'hero':
                    // Hier kannst du z.B. eine Ausgabe machen oder Shortcodes rendern
                    echo do_shortcode('[lc_get_post post_type="lc_section" slug="hero"]');
                    break;

                case 'features':
                    // Hier Output für "features"
                    echo do_shortcode('[lc_get_post post_type="lc_section" slug="features"]');
                    break;
            }
        }
    } else {
        echo 'Keine Blöcke im flexiblen Feld gefunden.';
    }

} else {
    echo 'Keine Blöcke gefunden. Lege erst neue Blöcke an.';
}

get_footer();
