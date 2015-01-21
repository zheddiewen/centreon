<?php
/*
 * Copyright 2005-2014 MERETHIS
 * Centreon is developped by : Julien Mathis and Romain Le Merlus under
 * GPL Licence 2.0.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation ; either version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses>.
 *
 * Linking this program statically or dynamically with other modules is making a
 * combined work based on this program. Thus, the terms and conditions of the GNU
 * General Public License cover the whole combination.
 *
 * As a special exception, the copyright holders of this program give MERETHIS
 * permission to link this program with independent modules to produce an executable,
 * regardless of the license terms of these independent modules, and to copy and
 * distribute the resulting executable under terms of MERETHIS choice, provided that
 * MERETHIS also meet, for each linked independent module, the terms  and conditions
 * of the license of that module. An independent module is a module which is not
 * derived from this program. If you modify this program, you may extend this
 * exception to your version of the program, but you are not obliged to do so. If you
 * do not wish to do so, delete this exception statement from your version.
 *
 * For more information : contact@centreon.com
 *
 */

namespace CentreonConfiguration\Controllers;

use Centreon\Controllers\FormController;

class TrapController extends FormController
{
    protected $objectDisplayName = 'Trap';
    protected $objectName = 'trap';
    protected $objectBaseUrl = '/centreon-configuration/trap';
    protected $objectClass = '\CentreonConfiguration\Models\Trap';
    protected $datatableObject = '\CentreonConfiguration\Internal\TrapDatatable';
    protected $repository = '\CentreonConfiguration\Repository\TrapRepository';
    public static $relationMap = array(
        'trap_services' => '\CentreonConfiguration\Models\Relation\Trap\Service',
        'trap_servicetemplates' => '\CentreonConfiguration\Models\Relation\Trap\Servicetemplate',
        'trap_manufacturer' => '\CentreonConfiguration\Models\Relation\Trap\Manufacturer'
    );

    /**
     * List traps
     *
     * @method get
     * @route /trap
     */
    public function listAction()
    {
        parent::listAction();
    }

    /**
     * 
     * @method get
     * @route /trap/formlist
     */
    public function formListAction()
    {
        parent::formListAction();
    }

    /**
     * 
     * @method get
     * @route /trap/list
     */
    public function datatableAction()
    {
        parent::datatableAction();
    }
    
    /**
     * Update a trap
     *
     *
     * @method post
     * @route /trap/update
     */
    public function updateAction()
    {
        parent::updateAction();
    }
    
    /**
     * Add a trap
     *
     *
     * @method post
     * @route /trap/add
     */
    public function createAction()
    {
        parent::createAction();
    }
    
    /**
     * Update a trap
     *
     *
     * @method get
     * @route /trap/[i:id]
     */
    public function editAction()
    {
        parent::editAction();
    }
    
    /**
     * Add a trap
     *
     * @method get
     * @route /trap/add
     */
    public function addAction()
    {
        $this->tpl->assign('validateUrl', '/centreon-configuration/trap/add');
        parent::addAction();
    }

    /**
     * Get the list of massive change fields
     *
     * @method get
     * @route /trap/mc_fields
     */
    public function getMassiveChangeFieldsAction()
    {
        parent::getMassiveChangeFieldsAction();
    }

    /**
     * Get the html of attribute filed
     *
     * @method get
     * @route /trap/mc_fields/[i:id]
     */
    public function getMcFieldAction()
    {
        parent::getMcFieldAction();
    }

    /**
     * Duplicate a hosts
     *
     * @method POST
     * @route /trap/duplicate
     */
    public function duplicateAction()
    {
        parent::duplicateAction();
    }

    /**
     * Apply massive change
     *
     * @method POST
     * @route /trap/massive_change
     */
    public function massiveChangeAction()
    {
        parent::massiveChangeAction();
    }

    /**
     * Delete action for hosttemplate
     *
     * @method post
     * @route /trap/delete
     */
    public function deleteAction()
    {
        parent::deleteAction();
    }

    /**
     * Manufacturer for specific trap
     *
     * @method get
     * @route /trap/[i:id]/manufacturer
     */
    public function manufacturerForTrapAction()
    {
        parent::getSimpleRelation('manufacturer_id', '\CentreonConfiguration\Models\Manufacturer');
    }

    /**
     * Services for specific trap
     *
     * @method get
     * @route /trap/[i:id]/service
     */
    public function serviceForTrapAction()
    {
        parent::getRelations(static::$relationMap['trap_services']);
    }

    /**
     * Service templates for specific trap
     *
     * @method get
     * @route /trap/[i:id]/servicetemplate
     */
    public function servicetemplateForTrapAction()
    {
        parent::getRelations(static::$relationMap['trap_servicetemplates']);
    }
}
