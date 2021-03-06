<?php namespace Georgebohnisch\Redoubt\GroupObjectPermission;

/**
 * Interface for defining GroupObjectPermissions
 */

interface ProviderInterface
{
	/**
	 * Gets all GroupObjectPermisisons for a given permission on a given object
	 * @param mixed $object
	 * @param \Georgebohnisch\Redoubt\Permission\ProviderInterface $permission
	 * @return \IteratorAggregate
	 */
	public function findPermissions($object, $permission);
	
	/**
	 * Gets any GroupObjectPermissions for a list of groups, an object, or an object's permission
	 * @param array(\Georgebohnisch\Redoubt\Group\GroupInterface) $groups
	 * @param mixed|string|null $object
	 * @param string|null $permission
	 * @return \IteratorAggregate
	 */
	public function findAnyPermission($groups, $object = null, $permission = null);
	
	/**
	 * Gets a single GroupObjectPermission for a given group, object, and permission
	 * @param \Georgebohnisch\Redoubt\Group\GroupInterface $group
	 * @param mixed $object
	 * @param \Georgebohnisch\Redoubt\Permission\ProviderInterface $permission
	 * @return GroupObjectPermission
	 */
	public function findPermission($group, $object, $permission);
	
	/**
	 * Find permissions by object
	 * @param Permission $permission
	 * @param mixed $object
	 * @return array(GroupObjectPermission)
	 */
	public function findByObject($permission, $object);
	
	/**
	 * Find permissions by groups
	 * @param array(\Georgebohnisch\Redoubt\Group\GroupInterface) $groups
	 * @return array(GroupObjectPermission)
	 */
	public function findByGroups($groups);
	
	/**
	 * Creates a GroupObjectPermission
	 * @param array $attributes
	 * @return GroupObjectPermission
	 */
	public function create($attributes);
	
	/**
	 * Deletes a GroupObjectPermission
	 * @param GroupObjectPermission $groupObjectPermission
	 */
	public function delete($groupObjectPermission);
}