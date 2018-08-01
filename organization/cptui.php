<?php
function cptui_register_my_cpts_prodotti() {
	// Post Type: Prodotti.	
	$labels = array(
		"name" => __( "Prodotti", "isotype" ),
		"singular_name" => __( "Prodotto", "isotype" ),
		"all_items" => __( "Tutti i Prodotti", "isotype" ),
		"add_new" => __( "Aggiungi nuovo", "isotype" ),
		"add_new_item" => __( "Aggiungi nuovo Prodotto", "isotype" ),
		"edit_item" => __( "Modifica Prodotto", "isotype" ),
		"new_item" => __( "Nuovo Prodotto", "isotype" ),
		"view_item" => __( "Visualizza Prodotto", "isotype" ),
		"view_items" => __( "vedi Prodotto", "isotype" ),
		"search_items" => __( "Cerca Prodotto", "isotype" ),
		"not_found" => __( "Nessun Prodotto trovato", "isotype" ),
		"not_found_in_trash" => __( "Nessun Prodotto trovato nel Cestino", "isotype" ),
		"parent_item_colon" => __( "Prodotto genitore", "isotype" ),
		"featured_image" => __( "L'immagine in evidenza per questo Prodotto", "isotype" ),
		"set_featured_image" => __( "Imposta l'immagine in evidenza per questo Prodotto", "isotype" ),
		"remove_featured_image" => __( "Rimuovi l'immagine in evidenza per questo Prodotto", "isotype" ),
		"use_featured_image" => __( "Utilizza come immagine personalizzata per questo Prodotto", "isotype" ),
		"archives" => __( "Archivio Prodotti", "isotype" ),
		"insert_into_item" => __( "Inserisci nel Prodotto", "isotype" ),
		"uploaded_to_this_item" => __( "Caricato in questo Prodotto", "isotype" ),
		"filter_items_list" => __( "Filtra elenco Prodotti", "isotype" ),
		"items_list_navigation" => __( "Lista di navigazione per Prodotti", "isotype" ),
		"items_list" => __( "Elenco Prodotti", "isotype" ),
		"attributes" => __( "Attributi dei Prodotti", "isotype" ),
		"parent_item_colon" => __( "Prodotto genitore", "isotype" ),
	);

	$args = array(
		"label" => __( "Prodotti", "isotype" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "prodotti", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes" ),
	);

	register_post_type( "prodotti", $args );
}
add_action( 'init', 'cptui_register_my_cpts_prodotti' );

function cptui_register_my_cpts_servizi() {
	// Post Type: Servizi.	
	$labels = array(
		"name" => __( "Servizi", "isotype" ),
		"singular_name" => __( "Servizio", "isotype" ),
		"all_items" => __( "Tutti i Servizi", "isotype" ),
		"add_new" => __( "Aggiungi nuovo", "isotype" ),
		"add_new_item" => __( "Aggiungi nuovo Servizio", "isotype" ),
		"edit_item" => __( "Modifica Servizio", "isotype" ),
		"new_item" => __( "Nuovo Servizio", "isotype" ),
		"view_item" => __( "Visualizza Servizio", "isotype" ),
		"view_items" => __( "Vedi Servizio", "isotype" ),
		"search_items" => __( "Cerca Servizio", "isotype" ),
		"not_found" => __( "Nessun Servizio trovato", "isotype" ),
		"not_found_in_trash" => __( "Nessun Servizio nel Cestino", "isotype" ),
		"parent_item_colon" => __( "Servizio genitore", "isotype" ),
		"featured_image" => __( "L'immagine in evidenza per questo Servizio", "isotype" ),
		"set_featured_image" => __( "Imposta l'immagine in evidenza per questo Servizio", "isotype" ),
		"remove_featured_image" => __( "Rimuovi l'immagine in evidenza per questo Servizio", "isotype" ),
		"use_featured_image" => __( "Utilizza come immagine personalizzata per questo Servizio", "isotype" ),
		"archives" => __( "Servizi", "isotype" ),
		"insert_into_item" => __( "Inserisci nel Servizio", "isotype" ),
		"uploaded_to_this_item" => __( "Caricato in questo Servizio", "isotype" ),
		"filter_items_list" => __( "Filtra l'elenco dei Servizi", "isotype" ),
		"items_list_navigation" => __( "Lista di navigazione per Servizi", "isotype" ),
		"items_list" => __( "Servizi", "isotype" ),
		"attributes" => __( "Attributi dei Servizi", "isotype" ),
		"parent_item_colon" => __( "Servizio genitore", "isotype" ),
	);

	$args = array(
		"label" => __( "Servizi", "isotype" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "servizi", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "revisions", "author", "page-attributes" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "servizi", $args );
}
add_action( 'init', 'cptui_register_my_cpts_servizi' );

function cptui_register_my_cpts_sedi() {
	// Post Type: Sedi.	
	$labels = array(
		"name" => __( "Sedi", "isotype" ),
		"singular_name" => __( "Sede", "isotype" ),
		"all_items" => __( "Tutte le Sedi", "isotype" ),
		"add_new" => __( "Aggiungi nuova", "isotype" ),
		"add_new_item" => __( "Aggiungi nuova Sede", "isotype" ),
		"edit_item" => __( "Modifica Sede", "isotype" ),
		"new_item" => __( "Nuova Sede", "isotype" ),
		"view_item" => __( "Visualizza Sede", "isotype" ),
		"view_items" => __( "Vedi Sede", "isotype" ),
		"search_items" => __( "Cerca Sede", "isotype" ),
		"not_found" => __( "Nessuna Sede trovata", "isotype" ),
		"not_found_in_trash" => __( "Nessuna Sede nel cestino", "isotype" ),
		"parent_item_colon" => __( "Sede genitore", "isotype" ),
		"archives" => __( "Sedi", "isotype" ),
		"items_list" => __( "Elenco Sedi", "isotype" ),
		"attributes" => __( "Attributi delle Sedi", "isotype" ),
		"parent_item_colon" => __( "Sede genitore", "isotype" ),
	);

	$args = array(
		"label" => __( "Sedi", "isotype" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "sedi", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "revisions", "author", "page-attributes" ),
	);

	register_post_type( "sedi", $args );
}
add_action( 'init', 'cptui_register_my_cpts_sedi' );
?>