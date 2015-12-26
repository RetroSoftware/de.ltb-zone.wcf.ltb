<?php
namespace wcf\system\dashboard\box;
use wcf\system\WCF;

/**
 * Dashboard box for LTB.
 * 
 * @author	Philipp Bornemann
 * @copyright	2016 LTB-Zone
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 */
class LTBDashboardBox extends AbstractSidebarDashboardBox {
	/**
	 * @see	\wcf\system\dashboard\box\AbstractContentDashboardBox::render()
	 */
	protected function render() {
		return WCF::getTPL()->fetch('dashboardBoxLTB');
	}
}