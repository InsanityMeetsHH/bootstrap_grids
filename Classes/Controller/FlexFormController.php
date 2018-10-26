<?php
namespace InsanityMeetsHH\BootstrapGrids\Controller;

/*
 *
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *
 */

class FlexFormController {

    /**
     * @param array $config
     * @return array
     */
    public function getTwoColumnOptions($config) {
        // default for 2 columns
        $defaultOption = array('50% (col-md-6)', 'col-md-6 d-md-block');
        return \InsanityMeetsHH\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config, $defaultOption);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getThreeColumnOptions($config) {
        // default for 3 columns
        $defaultOption = array('33% (col-md-4)', 'col-md-4 d-md-block');
        return \InsanityMeetsHH\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config, $defaultOption);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getFourColumnOptions($config) {
        // default for 4 columns
        $defaultOption = array('25% (col-md-3)', 'col-md-3 d-md-block');
        return \InsanityMeetsHH\BootstrapGrids\Controller\FlexFormController::getColumnOptions($config, $defaultOption);
    }

    /**
     * @param array $config
     * @param array $defaultOption
     * @return array
     */
    public static function getColumnOptions($config, $defaultOption) {
        // mdCol, smCol, xsCol ,lgCol or xlCol
        $fieldName = $config['field'];
        $columnType = substr($fieldName, 0, -1);

        $optionList = array();
        switch ($columnType) {
            // extra small
            case 'xsCol':
                $optionList = array(
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                    array('25% (col-3)', 'col-3'),
                    array('33% (col-4)', 'col-4'),
                    array('50% (col-6)', 'col-6'),
                    array('66% (col-8)', 'col-8'),
                    array('75% (col-9)', 'col-9'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3% (col-1)', 'col-1'),
                    array('16.7%  (col-2)', 'col-2'),
                    array('41.7% (col-5)', 'col-5'),
                    array('58.3% (col-7)', 'col-7'),
                    array('83.3% (col-10)', 'col-10'),
                    array('91.7% (col-11)', 'col-11'),
                    array('100% (col-12)', 'col-12'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-none'),
//                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible', 'd-block') // not necessary at mobile first
                );
                break;

            // small device with
            case 'smCol':
                $optionList = array(
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                    array('25% (col-sm-3)', 'col-sm-3 d-sm-block'),
                    array('33% (col-sm-4)', 'col-sm-4 d-sm-block'),
                    array('50% (col-sm-6)', 'col-sm-6 d-sm-block'),
                    array('66% (col-sm-8)', 'col-sm-8 d-sm-block'),
                    array('75% (col-sm-9)', 'col-sm-9 d-sm-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3% (col-sm-1)', 'col-sm-1 d-sm-block'),
                    array('16.7%  (col-sm-2)', 'col-sm-2 d-sm-block'),
                    array('41.7% (col-sm-5)', 'col-sm-5 d-sm-block'),
                    array('58.3% (col-sm-7)', 'col-sm-7 d-sm-block'),
                    array('83.3% (col-sm-10)', 'col-sm-10 d-sm-block'),
                    array('91.7% (col-sm-11)', 'col-sm-11 d-sm-block'),
                    array('100% (col-sm-12)', 'col-sm-12 d-sm-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-sm-none'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible', 'd-sm-block')
                );
                break;
            
            // medium device with
            case 'mdCol':
                // new grids: flexform not yet saved => add default setting as first option
                if ( isset($config['flexParentDatabaseRow']['pi_flexform']['data']) && count($config['flexParentDatabaseRow']['pi_flexform']['data']) == 0) {
                    $optionListStart = array($defaultOption, array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '));
                } else {
                    $optionListStart = array(array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '), $defaultOption);
                }

                switch ($defaultOption[1])  {
                    case 'col-md-6 d-md-block':
                        $optionListStart =  array_merge($optionListStart, array(
                            array('25% (col-md-3)', 'col-md-3 d-md-block'),
                            array('33% (col-md-4)', 'col-md-4 d-md-block'))
                        );
                        break;
                    case 'col-md-4 d-md-block':
                        $optionListStart =  array_merge($optionListStart, array(
                            array('25% (col-md-3)', 'col-md-3 d-md-block'),
                            array('50% (col-md-6)', 'col-md-6 d-md-block'))
                        );
                        break;
                    case 'col-md-3 d-md-block':
                        $optionListStart =  array_merge($optionListStart, array(
                            array('33% (col-md-4)', 'col-md-4 d-md-block'),
                            array('50% (col-md-6)', 'col-md-6 d-md-block'))
                        );
                        break;
                }

                $optionList = array_merge($optionListStart, array(
                    array('66% (col-md-8)', 'col-md-8 d-md-block'),
                    array('75% (col-md-9)', 'col-md-9 d-md-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3% (col-md-1)', 'col-md-1 d-md-block'),
                    array('16.7%  (col-md-2)', 'col-md-2 d-md-block'),
                    array('41.7% (col-md-5)', 'col-md-5 d-md-block'),
                    array('58.3% (col-md-7)', 'col-md-7 d-md-block'),
                    array('83.3% (col-md-10)', 'col-md-10 d-md-block'),
                    array('91.7% (col-md-11)', 'col-md-11 d-md-block'),
                    array('100% (col-md-12)', 'col-md-12 d-md-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-md-none'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible', 'd-md-block'))
                );
                break;

            // large
            case 'lgCol':
                $optionList = array(
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                    array('25% (col-lg-3)', 'col-lg-3 d-lg-block'),
                    array('33% (col-lg-4)', 'col-lg-4 d-lg-block'),
                    array('50% (col-lg-6)', 'col-lg-6 d-lg-block'),
                    array('66% (col-lg-8)', 'col-lg-8 d-lg-block'),
                    array('75% (col-lg-9)', 'col-lg-9 d-lg-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3% (col-lg-1)', 'col-lg-1 d-lg-block'),
                    array('16.7%  (col-lg-2)', 'col-lg-2 d-lg-block'),
                    array('41.7% (col-lg-5)', 'col-lg-5 d-lg-block'),
                    array('58.3% (col-lg-7)', 'col-lg-7 d-lg-block'),
                    array('83.3% (col-lg-10)', 'col-lg-10 d-lg-block'),
                    array('91.7% (col-lg-11)', 'col-lg-11 d-lg-block'),
                    array('100% (col-lg-12)', 'col-lg-12 d-lg-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-lg-none'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible', 'd-lg-block')
                );
                break;
            // extra large
            case 'xlCol':
                $optionList = array(
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                    array('25% (col-xl-3)', 'col-xl-3 d-xl-block'),
                    array('33% (col-xl-4)', 'col-xl-4 d-xl-block'),
                    array('50% (col-xl-6)', 'col-xl-6 d-xl-block'),
                    array('66% (col-xl-8)', 'col-xl-8 d-xl-block'),
                    array('75% (col-xl-9)', 'col-xl-9 d-xl-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3% (col-xl-1)', 'col-xl-1 d-xl-block'),
                    array('16.7%  (col-xl-2)', 'col-xl-2 d-xl-block'),
                    array('41.7% (col-xl-5)', 'col-xl-5 d-xl-block'),
                    array('58.3% (col-xl-7)', 'col-xl-7 d-xl-block'),
                    array('83.3% (col-xl-10)', 'col-xl-10 d-xl-block'),
                    array('91.7% (col-xl-11)', 'col-xl-11 d-xl-block'),
                    array('100% (col-xl-12)', 'col-xl-12 d-xl-block'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-xl-none'),
                    array('LLL:EXT:bootstrap_grids/Resources/Private/Language/locallang_db.xlf:grid.label.visible', 'd-xl-block')
                );
                break;
        }
        $config['items'] = array_merge($config['items'], $optionList);
        return $config;
    }
}
