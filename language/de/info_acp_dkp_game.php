<?php
/**
 * bbdkp acp language file for Game, Race and Class - german
 *
 * @package phpBB Extension - bbdkp
 * @copyright 2010 bbdkp <https://github.com/bbDKP>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author sajaki <sajaki@gmail.com>
 * @link http://www.avathar.be/bbdkp
 * @version 2.0
 * @translation various unknown authors, killerpommes
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
    'ACP_DKP_GAME'			=> 'Spieleinstellungen',
	'ACP_DKP_FACTION_ADD'		=> 'Faktion hinzufügen',
	'ACP_DKP_RACE_ADD'		=> 'Rasse hinzufügen',
    'ACP_DKP_ROLE_ADD'		=> 'Rolle hinzufügen',
	'ACP_DKP_CLASS_ADD'		=> 'Klasse hinzufügen',  
	'ACP_DKP_GAME_LIST'		=> 'Spielliste',
	'ACP_DKP_GAME_EDIT'		=> 'Spiel bearbeiten',
));