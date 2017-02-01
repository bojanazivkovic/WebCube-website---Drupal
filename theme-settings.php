<?php

function webcube_form_system_theme_settings_alter(&$form,  &$form_state) {


  $form['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('SVA PODESAVANJA ZA MOJU TEMU :-)'),
    '#group' => 'webcube',
  );
  
  //FRONTPAGE PODESAVANJA  
$form['general']['frontpage'] = array(
    '#type' => 'fieldset',
    '#title' => t('FRONTPAGE PODESAVANJA'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  
$form ['general']['frontpage']['logo_front'] = array(
    '#type'     => 'managed_file',
	'#title'    => t('LOGO ZA FRONT PAGE'),
	'#upload_location' => file_default_scheme() . '://webcube/logo_front/',
	'#default_value' => theme_get_setting('logo_front'), 
	'#description'   => t("Dimenzija trenutne slike je 500x146."),
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );		
$form ['general']['frontpage']['background_front'] = array(
    '#type'     => 'managed_file',
	'#title'    => t('POZADINA ZA FRONT PAGE'),
	'#upload_location' => file_default_scheme() . '://webcube/background_front/',
	'#default_value' => theme_get_setting('background_front'), 
	'#description'   => t("Dimenzija pozadine je 1000x561."),
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );	
	  
  
 
$form ['general']['frontpage']['strelica'] = array(
    '#type'          => 'textfield',
    '#title'         => t('URL za strelicu'),
    '#default_value' => theme_get_setting('strelica'),
    '#description'   => t("Upisite link za strelicu. Trenutno je postavljen link node/1"),
  );	
	
$form ['general']['frontpage']['strelica_img'] = array(
    '#type'     => 'managed_file',
	'#title'    => t('SLIKA ZA STRELICU'),
	'#upload_location' => file_default_scheme() . '://webcube/strelica_img/',
	'#default_value' => theme_get_setting('strelica_img'), 
	'#description'   => t("Dimenzija trenutne strelice je 80x80."),
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );	
	

 //ABOUT US BLOKOVI 
$form['general']['aboutus_blokovi'] = array(
    '#type' => 'fieldset',
    '#title' => t('PODESAVANJE POZADINE ZA ABOUT US BLOKOVE'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['general']['aboutus_blokovi']['about_block_1'] = array(
    '#type'     => 'managed_file',
	'#title'    => t('BACKGROUND ZA PRVI BLOK'),
	'#upload_location' => file_default_scheme() . '://webcube/about_block_1/',
	'#default_value' => theme_get_setting('about_block_1'), 
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );

  $form['general']['aboutus_blokovi']['about_block_2'] = array(
	'#type'     => 'managed_file',
	'#title'    => t('BACKGROUND ZA DRUGI BOKS'),
	'#upload_location' => file_default_scheme() . '://webcube/about_block_2/',
	'#default_value' => theme_get_setting('about_block_2'), 
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );

  $form['general']['aboutus_blokovi']['about_block_3'] = array(
	'#type'     => 'managed_file',
	'#title'    => t('BACKGROUND ZA TRECI BLOK'),
	'#upload_location' => file_default_scheme() . '://webcube/about_block_3/',
	'#default_value' => theme_get_setting('about_block_3'), 
	'#upload_validators' => array(
			'file_validate_extensions' => array('gif png jpg jpeg'),
		),
	 );


//KONTAKT STRANA
$form['general']['contact'] = array(
    '#type' => 'fieldset',
    '#title' => t('PODESAVANJE KONTAKT STRANE'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );	 
$form['general']['contact']['contact_mail'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Email'),
    '#default_value' => theme_get_setting('contact_mail'),
    '#description'   => t("Upisite vas email koji ce se videti na kontakt strani."),
  );
	 
$form['general']['contact']['contact_phone'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Telefon'),
    '#default_value' => theme_get_setting('contact_phone'),
    '#description'   => t("Upisite vas telefon koji ce se videti na kontakt strani."),
  );	  
	
$form['general']['contact']['facebook_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
    '#description'   => t("Upisite vas Facebook url za kontakt stranu. Obavezno upisite https:// pre linka"),
  );	
	
$form['general']['contact']['twitter_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
    '#description'   => t("Upisite vas Twitter url za kontakt stranu. Obavezno upisite https:// pre linka"),
  );		

  

	
}