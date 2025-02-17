<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}

require_once __DIR__  . '/../core/class/jMQTTBase.class.php';
?>

<form class="form-horizontal">
    <fieldset>
        <legend><i class="fas fa-cog"></i>{{installation}}</legend>
        <div class="form-group">
            <label class="col-sm-5 control-label">{{Installer Mosquitto localement}}</label>
            <div class="col-sm-3">
                <input id="mosquitto_por" type="checkbox" class="configKey autoCheck" data-l1key="installMosquitto"
                    checked />
            </div>
        </div>
        <legend><i class="fas fa-university"></i>{{Démons}}</legend>
        <div class="form-group">
            <label class="col-sm-5 control-label">{{Port démon python}}</label>
            <div class="col-sm-3">
                <input class="configKey form-control" data-l1key="pythonsocketport" placeholder="<?php echo jMQTTBase::get_default_python_port('jMQTT'); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">{{Port démon websocket}}</label>
            <div class="col-sm-3">
                <input class="configKey form-control" data-l1key="websocketport" placeholder="<?php echo jMQTTBase::get_default_websocket_port('jMQTT'); ?>"/>
            </div>
        </div>
    </fieldset>
</form>
