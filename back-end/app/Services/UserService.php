<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

final class UserService
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function findAll(){
        $users = $this->userModel;
        return $users;
    }

    public function store(array $data): User
    {
        DB::beginTransaction();
        try {
            $user = $this->userModel->create([
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'remember_token' => Str::random(50)
            ]);

            DB::commit();
            return $user;
        }catch (\Exception $exception){
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }

    public function update(array $data, $user): User
    {
        DB::beginTransaction();
        try {
            $user->create([
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'password' => isset($data['password']) ? bcrypt($data['password']) : $user->password
            ]);

            DB::commit();
            return $user;
        }catch (\Exception $exception){
            DB::rollBack();
            throw new \Exception($exception->getMessage());
        }
    }
}
