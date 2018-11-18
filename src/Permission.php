<?php

namespace Zhouzishu\LaravelNovaPermission;

use Laravel\Nova\Resource;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends Resource
{
	use PermissionResourceTrait;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = SpatiePermission::class;

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'display_name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name', 'display_name'
	];

	/**
	 * Indicates if the resource should be displayed in the sidebar.
	 *
	 * @var bool
	 */
	public static $displayInNavigation = false;
}
