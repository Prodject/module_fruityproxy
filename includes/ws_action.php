<?
/*
    Copyright (C) 2013-2015 xtr4nge [_AT_] gmail.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

include "../../../config/config.php";
require("ws.php");

//$ws = new WebService("admin", "admin");
$ws = new WebService($api_token);

$method = $_GET["method"];
$plugin = $_GET["plugin"];
$module = $_GET["module"];
$action = $_GET["action"];

if ($method == "getPlugins") {
	echo $ws->getPlugins();
}

if ($method == "setModulesStatus") {
	echo $ws->setModulesStatus($module, $action);
}

if ($method == "getModulesStatusAll") {
	echo $ws->getModulesStatusAll();
}

?>
