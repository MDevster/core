<?php
/**
 * This file is part of Oveleon ImmoManager.
 *
 * @link      https://github.com/oveleon/contao-immo-manager-bundle
 * @copyright Copyright (c) 2018-2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://github.com/oveleon/contao-immo-manager-bundle/blob/master/LICENSE
 */

$GLOBALS['TL_DCA']['tl_real_estate_config'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'File',
		'closed'                      => true
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{real_estate_visualization_legend},defaultImage;{real_estate_list_legend},defaultSorting;{number_legend:hide},numberFormatDecimals,numberFormatThousands;{filter_config:hide},roomOptions'
	),

	// Fields
	'fields' => array
	(
		'numberFormatDecimals' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['numberFormatDecimals'],
            'default'                 => ',',
			'inputType'               => 'select',
            'options'                 => array(',' => 'Komma (,)', '.' =>'Punkt (.)'),
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
		),
		'numberFormatThousands' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['numberFormatThousands'],
            'default'                 => '.',
            'inputType'               => 'select',
            'options'                 => array(',' => 'Komma (,)', '.' =>'Punkt (.)'),
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
		),
		'defaultSorting' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['defaultSorting'],
            'default'                 => '.',
            'inputType'               => 'select',
            'options'                 => array('tstamp' => 'Aktualität'), // ToDo: Auf sorting reagieren und options erweitern
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
		),
        'defaultImage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['defaultImage'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'isGallery'=>true, 'extensions'=>Config::get('validImageTypes'), 'tl_class'=>'clr w50'),
        ),
        'roomOptions' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['roomOptions'],
            'default'                 => '1,2,3,4,5,6,7,8,9,10',
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'w50')
        ),
	)
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Daniele Sciannimanica <daniele@oveleon.de>
 */
class tl_real_estate_config extends Backend
{


}
