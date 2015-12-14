<?php namespace ProSearch;

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   Pro Search
 * @author    Alexander Naumov http://www.alexandernaumov.de
 * @license   commercial
 * @copyright 2015 Alexander Naumov
 */

class PrepareDataException
{
    /**
     *
     */
    public function prepareDataExceptions($arr, $db, $table, $pDoTable)
    {
        // exception for content
        if( $table == 'tl_content')
        {
            $arr['ptable'] = $db['ptable'] ? $db['ptable'] : '';
            $arr['doTable'] = $pDoTable ? $pDoTable : '';
        }

        // exception for page
        if( $table == 'tl_page')
        {
            $arr['ptable'] = 'tl_page';
        }

        // exception for files
        if( $table == 'tl_files' )
        {
            $arr['docId'] = $db['path'] ? $db['path'] : '';
            $arr['pid'] = '';
        }

        return $arr;
    }

    public function setCustomIcon($table, $db, $dataArr, $dca)
    {
        $iconName = '';

        if($table == 'tl_module')
        {
            $iconName = 'modules.gif';
        }

        if($table == 'tl_layout')
        {
            $iconName = 'layout.gif';
        }

        if($table == 'tl_style_sheet' || $table == 'tl_style')
        {
            $iconName = 'css.gif';
        }

        if($table == 'tl_image_size')
        {
            $iconName = 'sizes.gif';
        }

        if($table == 'tl_newsletter')
        {
            $iconName = 'system/modules/newsletter/assets/icon.gif';
        }

        if($table == 'tl_newsletter_recipients')
        {
            $iconName = 'member.gif';
        }

        if($table == 'tl_files' && $db['type'] == 'file')
        {

            $iconName = 'files.gif';

            if($db['extension'] == 'pdf')
            {
                $iconName = 'iconPDF.gif';
            }

            if($db['extension'] == 'jpg' || $db['extension'] == 'png' || $db['extension'] == 'tif' || $db['extension'] == 'bmp' || $db['extension'] == 'svg')
            {
                $iconName = 'iconJPG.gif';
            }

            if($db['extension'] == 'gif')
            {
                $iconName = 'iconGIF.gif';
            }

            if($db['extension'] == 'zip' || $db['extension'] == 'rar' )
            {
                $iconName = 'iconRAR.gif';
            }

            if($db['extension'] == 'css' )
            {
                $iconName = 'iconCSS.gif';
            }

            if($db['extension'] == 'js' )
            {
                $iconName = 'iconJS.gif';
            }

            if($db['extension'] == 'php' )
            {
                $iconName = 'iconPHP.gif';
            }

        }

        if($table == 'tl_files' && $db['type'] == 'folder')
        {
            $iconName = 'folderC.gif';
        }

        if($table == 'tl_page')
        {
            $iconName = 'regular.gif';

            if( $db['type'] == 'root')
            {
                $iconName = 'pagemounts.gif';
            }

            if( $db['type'] == 'forward')
            {
                $iconName = 'forward.gif';
            }

            if( $db['type'] == 'redirect')
            {
                $iconName = 'redirect.gif';
            }

            if( $db['type'] == 'error_403')
            {
                $iconName = 'error_403.gif';
            }

            if( $db['type'] == 'error_404')
            {
                $iconName = 'error_404.gif';
            }

            if( $db['type'] == 'error_404')
            {
                $iconName = 'error_404.gif';
            }

            if( $db['type'] == 'regular' && $db['hide'] == '1' )
            {
                $iconName = 'regular_2.gif';
            }

        }


        return $iconName;

    }


    public function setCustomShortcut($table, $db, $dataArr, $dca)
    {
        $shortcut = '';

        if($table == 'tl_module')
        {
            $shortcut = 'fe';
        }

        if($table == 'tl_layout')
        {
            $shortcut = 'la';
        }

        if($table == 'tl_style_sheet' || $table == 'tl_style')
        {
            $shortcut = 'css';
        }

        if($table == 'tl_image_size')
        {
            $shortcut = 'si';
        }

        if($table == 'tl_newsletter')
        {
            $shortcut = 'nl';
        }

        if($table == 'tl_newsletter_recipients')
        {
            $shortcut = 'abo';
        }

        return $shortcut;
    }

}