<?php
/* 1. Option Pages
 * 1.1. Organization
 * 1.2. Social Media
 * 1.3. Privacy
 * 1.4. Copyright
 * 2. Main Location
 * 3. Microdata
 * 4. Call to action (CTA) in the Header
 * 5. Offer (Products and Services)
 * 6. Social Media
 * 7. Newsletter
 * 8. Emergency Contact
 * 9. User Data
 */
 function isotype_acf_google_map_api( $api ){
	global $googlemaps_api_key;
	$api['key'] = $googlemaps_api_key;
	return $api;
}
add_filter('acf/fields/google_map/api', 'isotype_acf_google_map_api');
 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('La tua organizzazione', 'isotype'),
		'menu_title'	=> __('Organizzazione', 'isotype'),
		'menu_slug' 	=> 'organization-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_sub_page(array(
        'page_title'     => 'Impostazioni',
        'menu_title'    => 'locations-settings',
        'parent_slug'    => 'edit.php?post_type=sedi',
    ));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Social media', 'isotype'),
		'menu_title'	=> __('Social media', 'isotype'),
		'parent_slug'	=> 'organization-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Privacy', 'isotype'),
		'menu_title'	=> __('Privacy', 'isotype'),
		'parent_slug'	=> 'organization-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Copyright', 'isotype'),
		'menu_title'	=> __('Copyright', 'isotype'),
		'parent_slug'	=> 'organization-settings',
	));
	
}
if( function_exists('acf_add_local_field_group') ):
	
	acf_add_local_field_group(array(
		'key' => 'group_59d3a9d10f411',
		'title' => 'Sede principale',
		'fields' => array(
			array(
				'key' => 'field_59d3a9e6404fa',
				'label' => 'Sede principale',
				'name' => 'mainLocation',
				'type' => 'post_object',
				'instructions' => 'Le informazioni relative alla sede selezionata compaiono nella testata (header) e nel pie\' di pagina (footer) del sito web. <br />
	<strong>Se l\'organizzazione ha più sedi</strong>, di solito, sono relative alla sede legale o alla sede principale. Puoi <strong>modificare le sedi</strong> nella <a href="/wp-admin/admin.php?page=acf-options-sedi">sezione “Sedi”</a>. <br />
	<a href="/wp-admin/post-new.php?post_type=sedi">Aggiungi una nuova sede</a>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'sedi',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array(
				'key' => 'field_59dccc163a69f',
				'label' => 'Dove siamo',
				'name' => 'where',
				'type' => 'text',
				'instructions' => 'Appare nel Top Header',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'ad es. Siamo <strong>a Roma</strong>',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_59e0647b8a5a3',
				'label' => 'Mappa delle sedi',
				'name' => 'locationsMap',
				'type' => 'textarea',
				'instructions' => 'Apri <a href="https://www.google.it/maps" target="_blank">Google Maps</a> ed esegui una ricerca che visualizzi esclusivamente tutte le sedi della tua organizzazione (ad es. "Studio Dentistico Martinez", tra virgolette). Apri il Menu in alto a sinistra e clicca "Condividi o incorpora mappa". Clicca il tab "Incorpora mappa". Copia e incolla in questo campo il codice che inizia con <code>&lt;iframe src="</code>… Modifica gli attributi, se necessario.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '<iframe src="…',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'organization-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_59ce5bda713ef',
		'title' => 'Microdata',
		'fields' => array(
			array(
				'key' => 'field_59ce606dc9d7e',
				'label' => '@context',
				'name' => '@context',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'https://schema.org',
				'placeholder' => '',
			),
			array(
				'key' => 'field_59ce5bede1938',
				'label' => '@type',
				'name' => '@type',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Person' => 'Persona',
					'Organization' => 'Organizzazione',
					'Airline' => '– Compagnia aerea',
					'Corporation' => '– Corporation',
					'EducationalOrganization' => '– EducationalOrganization',
					'GovernmentOrganization' => '– GovernmentOrganization',
					'LocalBusiness' => '– Impresa locale',
					'MedicalOrganization' => '– MedicalOrganization',
					'NGO' => '– Organizzazione non governativa (ONG)',
					'PerformingGroup' => '– PerformingGroup',
					'SportsOrganization' => '– Associazione Sportiva',
					'AnimalShelter' => '– AnimalShelter',
					'AutomotiveBusiness' => '– AutomotiveBusiness',
					'ChildCare' => '– ChildCare',
					'Dentist' => '– Dentista',
					'DryCleaningOrLaundry' => '– DryCleaningOrLaundry',
					'EmergencyService' => '– EmergencyService',
					'EmploymentAgency' => '– Agenzia per l\'iimpiego',
					'EntertainmentBusiness' => '– EntertainmentBusiness',
					'FinancialService' => '– Servizi finanziari',
					'FoodEstablishment –– Esercizi di somministrazione di alimenti e bevande' => 'FoodEstablishment – Esercizi di somministrazione di alimenti e bevande',
					'Bakery' => '––– Forno',
					'BarOrPub' => '––– Bar o Pub',
					'Brewery' => '––– Birreria',
					'CafeOrCoffeeShop' => '––– Caffè o Coffee Shop',
					'FastFoodRestaurant' => '––– Fast food',
					'IceCreamShop' => '––– Gelateria',
					'Restaurant' => '––– Ristorante, Trattoria od Osteria',
					'Winery' => '––– Enoteca o Vineria',
					'Distillery' => '––– Distilleria',
					'GovernmentOffice' => '– GovernmentOffice',
					'HealthAndBeautyBusiness' => '– HealthAndBeautyBusiness',
					'HomeAndConstructionBusiness' => '– HomeAndConstructionBusiness',
					'InternetCafe' => '– InternetCafe',
					'LegalService' => '– Legale',
					'Library' => '– Biblioteca',
					'LodgingBusiness' => '– Struttura ricettiva',
					'ProfessionalService' => '– Servizi professionali',
					'RadioStation' => '– Emittente radiofonica',
					'RealEstateAgent' => '– Agente immobiliare',
					'RecyclingCenter' => '– RecyclingCenter',
					'SelfStorage' => '– SelfStorage',
					'ShoppingCenter' => '– Centro commerciale',
					'SportsActivityLocation' => '– SportsActivityLocation',
					'Store' => '– Store',
					'TelevisionStation' => '– Emittente televisiva',
					'TouristInformationCenter' => '– Centro di informazioni turistiche',
					'TravelAgency' => '– Agenzia di viaggi',
				),
				'default_value' => array(
					0 => 'Organization',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
			array(
				'key' => 'field_59ce625106252',
				'label' => 'additionalTypes',
				'name' => 'additionalTypes',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_59ce626d06253',
						'label' => 'additionalType',
						'name' => 'additionalType',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'organization-settings',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_59d4fe97b9f3b',
		'title' => 'Chiamata all\'azione nella testata (Header)',
		'fields' => array(
			array(
				'key' => 'field_59d4fead4e02f',
				'label' => 'Testo',
				'name' => 'cta-text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_59d4fec9a81c1',
				'label' => 'Url o percorso',
				'name' => 'cta-url',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_59d4fee778517',
				'label' => 'Icona',
				'name' => 'cta-icon',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'organization-settings',
				),
			),
		),
		'menu_order' => 2,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5a1e51279f913',
		'title' => 'La tua offerta',
		'fields' => array(
			array(
				'key' => 'field_5a1e5137e1c64',
				'label' => 'Tipi di offerta',
				'name' => 'offer-types',
				'type' => 'checkbox',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'products' => 'Prodotti',
					'services' => 'Servizi',
				),
				'allow_custom' => 0,
				'save_custom' => 0,
				'default_value' => array(
				),
				'layout' => 'vertical',
				'toggle' => 0,
				'return_format' => 'value',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'organization-settings',
				),
			),
		),
		'menu_order' => 10,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5a38d6e579c85',
		'title' => 'Social media',
		'fields' => array(
			array(
				'key' => 'field_5a38d6f15a006',
				'label' => 'Social media pages',
				'name' => 'social_media',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5a38d72a5a007',
						'label' => 'Url',
						'name' => 'url',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a38d7415a008',
						'label' => 'Icona',
						'name' => 'image',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a38d7615a009',
						'label' => 'Nome social media',
						'name' => 'name',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-social-media',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5a61b7dea9183',
		'title' => 'Newsletter',
		'fields' => array(
			array(
				'key' => 'field_5a61b7f8ef760',
				'label' => 'Call to action (cta)',
				'name' => 'newsletter_cta',
				'type' => 'text',
				'instructions' => 'La chiamata all\'azione per l\'iscrizione alla newsletter.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Ricevi via email i nostri <strong>migliori consigli e offerte</strong>',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a61b8c7ef761',
				'label' => 'Descrizione',
				'name' => 'newsletter_description',
				'type' => 'textarea',
				'instructions' => 'Un breve testo che descrive la newsletter, cosa riceverà l\'utente, con quale frequenza…',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Ti invieremo un\'email mensile con notizie, offerte e aggiornamenti.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-social-media',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5a2829c203d26',
		'title' => 'Emergenze',
		'fields' => array(
			array(
				'key' => 'field_5a2829d6b0348',
				'label' => 'Abilita contatto per emergenze',
				'name' => 'emergency',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'organization-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	// User Data
	acf_add_local_field_group(array(
		'key' => 'group_59d3b2e750ef9',
		'title' => 'Dati anagrafici',
		'fields' => array(
			array(
				'key' => 'field_59d3b2fc94b5d',
				'label' => 'Nome registrato all\'anagrafe',
				'name' => 'name',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_59d3b32394b5e',
				'label' => 'Data di nascita',
				'name' => 'birthDate',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_59d3b64694b5f',
				'label' => 'Luogo di nascita',
				'name' => 'birthPlace',
				'type' => 'google_map',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
			array(
				'key' => 'field_59d3b67a94b60',
				'label' => 'Codice fiscale',
				'name' => 'taxID',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5a1e662795613',
				'label' => 'Partita IVA',
				'name' => 'vatID',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_59d3b71fb4232',
				'label' => 'Indirizzo di residenza',
				'name' => 'address',
				'type' => 'google_map',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'user_role',
					'operator' => '==',
					'value' => 'administrator',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;
?>