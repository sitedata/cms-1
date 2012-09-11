<?php
namespace Blocks;

/**
 * User functions
 */
class AccountsVariable
{
	/**
	 * Returns the current logged-in user.
	 *
	 * @return User
	 */
	public function current()
	{
		$record = blx()->accounts->getCurrentUser();
		if ($record)
			return new UserVariable($record);
	}

	/**
	 * Gets users.
	 *
	 * @param array $params
	 * @return array
	 */
	public function users($params = array())
	{
		$records = blx()->accounts->getUsers($params);
		return VariableHelper::populateVariables($records, 'UserVariable');
	}

	/**
	 * Gets the total number of users.
	 *
	 * @param array $params
	 * @return int
	 */
	public function totalUsers($params = array())
	{
		return blx()->accounts->getTotalUsers($params);
	}

	/**
	 * Returns a user by its ID.
	 *
	 * @param $userId
	 * @return User
	 */
	public function getById($userId)
	{
		$record = blx()->accounts->getUserById($userId);
		if ($record)
			return new UserVariable($record);
	}

	/**
	 * Gets a user by a verification code.
	 *
	 * @param string $code
	 * @return User
	 */
	public function getUserByVerificationCode($code)
	{
		$record = blx()->accounts->getUserByVerificationCode($code);
		if ($record)
			return new UserVariable($user);
	}

	/**
	 * Returns the recent users.
	 *
	 * @return array
	 */
	public function recent()
	{
		$records = blx()->accounts->getRecentUsers();
		return VariableHelper::populateVariables($records, 'UserVariable');
	}

	/**
	 * Returns the URL segment for account verification.
	 *
	 * @return string
	 */
	public function verifyAccountUrl()
	{
		return blx()->accounts->getVerifyAccountUrl();
	}
}
