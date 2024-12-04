<?php

namespace App\Helpers;

use App\Models\Menu;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

/**
 * Write code on Method
 *
 * @return response()
 */

class Common
{
    static function uploadImage($file, $path)
    {
        // if ($request->hasFile('pc_image')) {
        // Get the uploaded file
        // $file = $request->file('pc_image');

        // Get the temporary file path
        $file_tmp = $file->getPathName();

        // Get the original file name
        $file_name = $file->getClientOriginalName();

        // FTP credentials
        $ftp_host = env('REMOTE_FTP_HOST');
        $ftp_user = env('REMOTE_FTP_USERNAME');
        $ftp_pass = env('REMOTE_FTP_PASSWORD');

        // Establish an FTP connection
        $ftp_conn = ftp_connect($ftp_host);
        if (!$ftp_conn) {
            return false;
        }
        $login = ftp_login($ftp_conn, $ftp_user, $ftp_pass);
        if (!$login) {
            // die("Could not login to FTP server with the provided credentials.");

            return false;
        }

        // Set FTP to passive mode
        ftp_pasv($ftp_conn, true);

        $ftp_directory = env('REMOTE_FTP_ROOT') . '/' . $path . '/';
        $ftp_path = $ftp_directory . $file_name;

        // Ensure the directory exists
        if (!@ftp_chdir($ftp_conn, $ftp_directory)) {
            // If directory does not exist, create it
            if (ftp_mkdir($ftp_conn, $ftp_directory)) {
                return false;
            } else {
                return false;
            }
        }


        // $ftp_path = env('REMOTE_FTP_ROOT') . '/' . $path . '/' . $file_name;
        // Upload the file to the FTP server
        if (ftp_put($ftp_conn, $ftp_path, $file_tmp, FTP_BINARY)) {
            return  $path . '/' . $file_name;
        } else {
            return false;
        }

        // Close the FTP connection
        ftp_close($ftp_conn);
        // }
    }
    static function getFile($path)
    {
        return env('REMOTE_URL') . '/' . $path;
    }
    static function buildMenuHierarchy($parentId = null, $for = 'header')
    {
        $menus = Menu::where('parent_id', $parentId);
        if ($for == 'header') {
            $menus = $menus->where('for_header', 1);
        } else {
            $menus = $menus->where('for_footer', 1);
        }
        $menus = $menus->orderBy('sort_order', 'asc')->where('status', 'Y')->get(); // Get all menus with the given parent_id
        $menuArray = [];
        foreach ($menus as $menu) {
            $children = Common::buildMenuHierarchy($menu->id, $for);
            $menuArray[] = [
                'id' => $menu->id,
                'parent_id' => $menu->parent_id,
                'slug' => $menu->slug,
                'route' => $menu->route,
                'label' => $menu->label,
                'children' => $children,
            ];
        }
        return $menuArray;
    }

    static function getChildren($parentId)
    {
        $menus = Menu::where('parent_id', $parentId)->orderBy('sort_order', 'asc')->where('status', 'Y')->get();
        $menuArray = [];
        foreach ($menus as $menu) {
            $menuArray[] = [
                'id' => $menu->id,
                'slug' => $menu->slug,
                'label' => $menu->label,
                'route' => $menu->route,
            ];
        }
        return $menuArray;
    }
}
