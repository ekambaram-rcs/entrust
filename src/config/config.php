<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Entrust Role Model
	|--------------------------------------------------------------------------
	|
	| This is the Role model used by Entrust to create correct relations.  Update
	| the role if it is in a different namespace.
	|
	*/
	'role' => '\Role',

	/*
	|--------------------------------------------------------------------------
	| Entrust Roles Table
	|--------------------------------------------------------------------------
	|
	| This is the Roles table used by Entrust to save roles to the database.
	|
	*/
	'roles_table' => 'roles',

    /*
    |--------------------------------------------------------------------------
    | Entrust Roles Table columns
    |--------------------------------------------------------------------------
    |
    | This is the Roles table column name used by Entrust to save roles name to the database.
    |
    */
    'roles_table_column_id' => 'role_id',
    'roles_table_column_name' => 'name',

	/*
	|--------------------------------------------------------------------------
	| Entrust Permission Model
	|--------------------------------------------------------------------------
	|
	| This is the Permission model used by Entrust to create correct relations.  Update
	| the permission if it is in a different namespace.
	|
	*/
	'permission' => '\Permission',

	/*
	|--------------------------------------------------------------------------
	| Entrust Permissions Table
	|--------------------------------------------------------------------------
	|
	| This is the Permissions table used by Entrust to save permissions to the database.
	|
	*/
	'permissions_table' => 'permissions',

    /*
    |--------------------------------------------------------------------------
    | Entrust Permissions Table column name
    |--------------------------------------------------------------------------
    |
    | This is the Permissions table column name used by Entrust to save permissions to the database.
    |
    */
    'permissions_table_column_name' => 'name',

	/*
	|--------------------------------------------------------------------------
	| Entrust permission_role Table
	|--------------------------------------------------------------------------
	|
	| This is the permission_role table used by Entrust to save relationship between permissions and roles to the database.
	|
	*/
	'permission_role_table' => 'permission_role',

	/*
	|--------------------------------------------------------------------------
	| Entrust assigned_roles Table
	|--------------------------------------------------------------------------
	|
	| This is the assigned_roles table used by Entrust to save assigned roles to the database.
	|
	*/
	'assigned_roles_table' => 'assigned_roles',

    /*
    |--------------------------------------------------------------------------
    | Entrust User Table columns
    |--------------------------------------------------------------------------
    |
    | This is the Users table column name used by Entrust to save permissions to the database.
    |
    */
    'users_table_column_id' => 'user_id',

);
