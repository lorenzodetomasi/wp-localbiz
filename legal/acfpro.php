<?php
/* 1. Privacy Options
 * 2. Copyright Options
 * 3. Privacy Functions
 */
if( function_exists('acf_add_local_field_group') ):

	// Privacy Options
	acf_add_local_field_group(array(
		'key' => 'group_59ce575783a22',
		'title' => 'Privacy',
		'fields' => array(
			array(
				'key' => 'field_59ce576a248c1',
				'label' => 'Pagina Privacy',
				'name' => 'privacy_page_id',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 1,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array(
				'key' => 'field_5b08044f7f25f',
				'label' => 'Pagina Cookie',
				'name' => 'cookies_page_id',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array(
				'key' => 'field_59d3c5be3bd5d',
				'label' => 'Responsabile Privacy',
				'name' => 'privacyResponsible',
				'type' => 'user',
				'instructions' => 'Specificare solo se il Responsabile Privacy per il sito web è diverso da quello per la sede principale',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'role' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array(
				'key' => 'field_59ce5798248c2',
				'label' => 'Pagina Contatti',
				'name' => 'contact_page_id',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 1,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array(
				'key' => 'field_5a6b39c620911',
				'label' => 'Pagina Richiesta di contatto inviata',
				'name' => 'contact-form-submitted',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
			array(
				'key' => 'field_5a6b3a9320912',
				'label' => 'Pagina Richiesta di prenotazione inviata',
				'name' => 'booking-appointment-form-submitted',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-privacy',
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

	// Copyright Options
	acf_add_local_field_group(array(
		'key' => 'group_59ce152262b78',
		'title' => 'Copyright',
		'fields' => array(
			array(
				'key' => 'field_59ce15383ebc2',
				'label' => 'Data di creazione del sito web',
				'name' => 'dateCreated',
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
				'return_format' => 'Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_59ce16176e87e',
				'label' => 'Titolari dei diritti d\'autore',
				'name' => 'copyrightHolder',
				'type' => 'textarea',
				'instructions' => 'La persona o l\'organizzazione che detiene legalmente i diritti d\'autore. <br />
	Lascia vuoto il campo se corrisponde con la ragione sociale principale. <br />
	Se invece sono <strong>più soggetti</strong>, inseriscine uno per riga.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_59ce16f86cd6e',
				'label' => 'Autori del design',
				'name' => 'creator',
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
						'key' => 'field_59ce17656cd6f',
						'label' => 'Nome',
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
						'default_value' => 'Localbiz.it',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_59ce17796cd70',
						'label' => 'Url',
						'name' => 'url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'https://localbiz.it',
						'placeholder' => '',
					),
				),
			),
			array(
				'key' => 'field_59ce566f9020d',
				'label' => 'Pagina Disclaimer',
				'name' => 'disclaimer_page_id',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 1,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-copyright',
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
// Privacy Functions
if(function_exists('get_field')){
	$privacy_page_id = get_field('privacy_page_id', 'option');
	$cookies_page_id = get_field('cookies_page_id', 'option');
	$contact_page_id = get_field('contact_page_id', 'option');
	$disclaimer_page_id = get_field('disclaimer_page_id', 'option');
}
if(get_field('privacyResponsible', 'option')){
	$privacy_responsible_id = get_field('privacyResponsible', 'option')['ID'];
} elseif(get_field('privacyResponsible', $mainLocationID)) {
	$privacy_responsible_id = get_field('privacyResponsible', $mainLocationID)['ID'];
} else {
	$privacy_responsible_id = 1;
}
if($privacy_responsible_id){
	$privacy_responsible_data = get_userdata($privacy_responsible_id);
	if(get_field('name', 'user_'.$privacy_responsible_id)){
		$privacy_responsible_name = get_field('name', 'user_'.$privacy_responsible_id);
	} else {
		$privacy_responsible_name = $privacy_responsible_data->display_name;	
	}
	$privacy_responsible_address = get_user_meta($privacy_responsible_id, 'address', true)['address'];
	$privacy_responsible_email = get_userdata($privacy_responsible_id)->user_email;
}
?>