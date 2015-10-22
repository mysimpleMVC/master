<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class myTools 
{
    public static function debug($v) {
        echo '<pre>';
        print_r($v);
    }
    
    public static function getRoles($role, $module) {
        $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $result = $db->selectOne('SELECT role.`name` as role, 
	modules.`name` as module, 
	permissions.role_id, 
	permissions.module_id
        FROM permissions INNER JOIN modules ON permissions.module_id = modules.id
	INNER JOIN role ON role.id = permissions.role_id
        WHERE modules.`name` = :module and role.`name` = :role', 
                array('module' => $module, 'role' => $role));
        
        return $result;
    }
    
}
