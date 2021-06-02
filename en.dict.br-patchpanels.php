<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-06-02
 *
 * Localized data
 */

//
// Class: PatchPanel
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanel' => 'Patch Panel',
    'Class:PatchPanel+' => '',
    'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports',
    'Class:PatchPanel/Attribute:patchpanelport_list+' => '',
));

//
// Class: PatchPanelPort
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanelPort' => 'Patch Panel Port',
    'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:connectableci_name' => 'Name of Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Connected to Remote Patch Panel Port',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Connected to Remote Patch Panel Port Name',
));
