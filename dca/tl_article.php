<?php
/**
 * @file tl_article.php
 * @author Katrin Beutler
 * @version 3.5.6
 * @package kb.contao.extensions.ce
 * @copyright Katrin Beutler
 */

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('{title_legend},title,', '{title_legend},title,showAnchor,titleAnchor,' ,$GLOBALS['TL_DCA']['tl_article']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_article']['fields']['title']['eval']['tl_class'] = 'w50';

$GLOBALS['TL_DCA']['tl_article']['fields']['showAnchor'] = array (
    'exclude'                 => true,
    'filter'                  => false,
    'search'                  => false,
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['showAnchor'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['titleAnchor'] = array (
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['titleAnchor'],
    'exclude'                 => true,
    'filter'                  => false,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class' => 'w50',),
    'sql'                     => "varchar(255) NOT NULL default ''"
);