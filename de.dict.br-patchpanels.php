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
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchPanel' => 'Patchpanel',
    'Class:PatchPanel+' => '',
    'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports',
    'Class:PatchPanel/Attribute:patchpanelport_list+' => '',
));

//
// Class: PatchPanelPort
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchPanelPort' => 'Patchpanel Port',
    'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patchpanel zu diesem Port',
    'Class:PatchPanelPort/Attribute:connectableci_name' => 'Patchpanels zu diesem Port Name',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Verbidnung zu anderem Patchpanel Port',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Verbidnung zu anderem Patchpanel Port Name',
));
