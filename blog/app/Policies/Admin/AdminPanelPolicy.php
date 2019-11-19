<?php


namespace App\Policies\Admin;


use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

/**
 * Description policy logic for routes to admin panel
 *
 * Class AdminPanelPolicy
 * @package App\Policies\Admin
 */
class AdminPanelPolicy
{
    use HandlesAuthorization;

    protected $viewRoles = [
        \RoleSeeder::RoleSuperAdmin
    ];

    protected $editRoles = [
        \RoleSeeder::RoleSuperAdmin
    ];

    /**
     * Here logic for users who could view
     * admin panel.
     *
     * @param $role
     * @return bool
     */
    protected function canView($role)
    {
        $canView = in_array($role, $this->viewRoles);
        return $this->sendResponse($canView);
    }

    /**
     * Here logic for users who could edit
     * admin panel.
     *
     * @param $role
     * @return bool
     */
    protected function canEdit($role)
    {
        $canEdit = in_array($role, $this->editRoles);
        return $this->sendResponse($canEdit);
    }

    protected function sendResponse($result)
    {
        if ($result) {
            return true;
        }
        return abort(404);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function view(User $user)
    {
        $roleType = $user->getRole();
        return $this->canView($roleType);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        $roleType = $user->getRole();
        return $this->canEdit($roleType);
    }
}
