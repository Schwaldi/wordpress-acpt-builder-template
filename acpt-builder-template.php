<?php 
/** 
 * Template Name: ACPT Builder
 */ 
get_header();

// Vereinfachte Block-Verarbeitung - direkt inline
$blocks = get_acpt_field(['post_id' => get_the_ID(), 'box_name' => 'builder', 'field_name' => 'sections']);

if (!empty($blocks['blocks'])) {
    foreach ($blocks['blocks'] as $index => $block) {
        $block_type = key($block);
        $block_data = $block[$block_type];
        
        switch ($block_type) {
            //case = sections
            case 'hero':
                ?>
                <section class="position-relative bg-light py-5">
                    <img src="https://picsum.photos/1920/1080?random=<?php echo $index; ?>" 
                         alt="Background image" 
                         class="position-absolute top-0 start-0 w-100 h-100" 
                         style="object-fit: cover; opacity: 0.2; z-index: 1;" 
                         editable="inline">
                    
                    <div class="container position-relative z-2">
                        <div class="row">
                            <div class="col-lg-8 py-lg-6">
                                <div editable="rich">
                                    <h1 class="display-4 fw-bold mb-3 text-dark" editable="inline">
                                        <?php echo !empty($block_data['hero_heading'][0]) ? esc_html($block_data['hero_heading'][0]) : 'Kein Titel'; ?>
                                    </h1>
                                    <p class="lead text-muted mb-4" editable="inline">
                                        <?php echo !empty($block_data['hero_subheading'][0]) ? esc_html($block_data['hero_subheading'][0]) : 'Kein Untertitel'; ?>
                                    </p>
                                </div>
                                <a href="#kontakt" class="btn btn-primary btn-lg px-4 text-white" editable="inline">
                                    Kontakt Aufnehmen
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                break;
            
            case 'features':
                ?>
                <section class="py-5 bg-light">
                	<div class="container">
                		<div class="row">
                			<!-- First Item -->
                			<div class="col-md-4 d-flex">
                				<div class="me-3">
                					<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 576 512" width="40" height="40" fill="currentColor" class="text-primary">
                						<path d="M568.3 192c-29 .125-135 6.124-213.9 82.1C321.2 304.7 301 338.3 288 369.9c-13-31.63-33.25-65.25-66.38-94.87C142.8 198.2 36.75 192.2 7.75 192C3.375 192 0 195.4 0 199.9c.25 27.88 7.125 126.2 88.75 199.3C172.8 481 256 479.1 288 479.1s115.2 1.025 199.3-80.85C568.9 326 575.8 227.7 576 199.9C576 195.4 572.6 192 568.3 192zM288 302.6c12.75-18.87 27.62-35.75 44.13-50.5c19-18.62 39.5-33.37 60.25-45.25c-16.5-70.5-51.75-133-96.75-172.3c-4.125-3.5-11-3.5-15.12 0c-45 39.25-80.25 101.6-96.75 172.1c20.37 11.75 40.5 26.12 59.25 44.37C260 266.4 275.1 283.7 288 302.6z"></path>
                					</svg>
                				</div>
                				<div editable="rich">
                					<h5 class="fw-bold mb-2" editable="inline"><?php echo !empty($block_data['features_heading'][0]) ? esc_html($block_data['features_heading'][0]) : 'Kein Titel'; ?></h5>
                					<p class="text-muted" editable="inline">Gemeinsam erschaffen wir deine neue Unternehmens Webseite.</p>
                				</div>
                			</div>
                
                			<!-- Second Item -->
                			<div class="col-md-4 d-flex">
                				<div class="me-3">
                					<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="40" fill="currentColor" class="text-primary">
                						<path d="M464 16c-17.67 0-32 14.31-32 32v74.09C392.1 66.52 327.4 32 256 32C161.5 32 78.59 92.34 49.58 182.2c-5.438 16.81 3.797 34.88 20.61 40.28c16.89 5.5 34.88-3.812 40.3-20.59C130.9 138.5 189.4 96 256 96c50.5 0 96.26 24.55 124.4 64H336c-17.67 0-32 14.31-32 32s14.33 32 32 32h128c17.67 0 32-14.31 32-32V48C496 30.31 481.7 16 464 16zM441.8 289.6c-16.92-5.438-34.88 3.812-40.3 20.59C381.1 373.5 322.6 416 256 416c-50.5 0-96.25-24.55-124.4-64H176c17.67 0 32-14.31 32-32s-14.33-32-32-32h-128c-17.67 0-32 14.31-32 32v144c0 17.69 14.33 32 32 32s32-14.31 32-32v-74.09C119.9 445.5 184.6 480 255.1 480c94.45 0 177.4-60.34 206.4-150.2C467.9 313 458.6 294.1 441.8 289.6z"></path>
                					</svg>
                				</div>
                				<div editable="rich">
                					<h5 class="fw-bold mb-2" editable="inline">Entwicklung</h5>
                					<p class="text-muted" editable="inline">Ab und zu darf es etwas maßgeschneidertes sein.</p>
                				</div>
                			</div>
                
                			<!-- Third Item -->
                			<div class="col-md-4 d-flex">
                				<div class="me-3">
                					<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 448 512" width="40" height="40" fill="currentColor" class="text-primary">
                						<path d="M50.73 58.53C58.86 42.27 75.48 32 93.67 32H208V160H0L50.73 58.53zM240 160V32H354.3C372.5 32 389.1 42.27 397.3 58.53L448 160H240zM448 416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V192H448V416z"></path>
                					</svg>
                				</div>
                				<div editable="rich">
                					<h5 class="fw-bold mb-2" editable="inline">Pflege</h5>
                					<p class="text-muted" editable="inline">Keine Zeit deine Inhalte selbst zu pflegen? Dabei kann ich dich unterstützen.</p>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                <?php
                break;
                
            default:
                // Fallback für unbekannte Block-Typen
                if (current_user_can('edit_posts')) {
                    echo "<div class='alert alert-warning'>Unbekannter Block-Typ: {$block_type}</div>";
                }
                break;
        }
    }
} else {
    echo '<div class="container py-5"><div class="alert alert-info">Keine Blöcke gefunden. Lege erst neue Blöcke an.</div></div>';
}

get_footer();
?>
