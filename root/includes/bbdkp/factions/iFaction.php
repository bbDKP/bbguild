<?php

namespace bbdkp;

/**
 * @ignore
 */
if (! defined('IN_PHPBB'))
{
	exit();
}
/**
 * Factions interface
 *
 * @package 	bbDKP
 * @link http://www.bbdkp.com
 * @author Sajaki@gmail.com
 * @copyright 2013 bbdkp
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.2.9
 */
interface iFaction 
{
	/**
	 * gets faction from database
	 */
	function Get();
	
	/**
	 * adds a faction to database
	*/
	function Make();
	
	/**
	 * deletes a faction from database
	*/
	function Delete();
	
	/**
	 * updates a faction to database
	*/
	function Update(Faction $old_faction);
	
}

?>