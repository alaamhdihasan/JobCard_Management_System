<?php

namespace App\Controllers;

use App\Models\UserProfile_M;
use App\Models\Users_M;
use App\Libraries\Hash;

class UsersProfile_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    { 
        $id = $this->request->getGet('getid');
        $_SESSION['idvalue']=$id;
         
    }

    public function index2()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);      
        $userprofileinfo = $this->getUsersAndProfile($_SESSION['idvalue']);
        $data = [
            'userInfo' => $userinfo['U_ID'],
            'userprofileinfo' => $userprofileinfo,
            'title' => "UserProfile",
            'userName'=>$userinfo['U_UserName']
        ];

        return view('admin/users/userprofile',$data);
    }

    public function fetch()
    {
        $generalinfo=new Info_C();  
        $id=$this->request->getGet('getid');
        $data=[
            'userinfo'=>$this->getUsersAndProfile($id),
            'getstate'=>$generalinfo->getState(),
            'getpermission'=>$generalinfo->getPermission(),
            'getworkplace'=>$generalinfo->getWorkingPlace(),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $uesrsModel = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $uesrsModel->find($loggedUserId);

        $userprofilemodel=new UserProfile_M();
        $iduser=$this->request->getPost('userid');
        $idprofile=$this->request->getPost('profileid');
        // $password=$this->request->getPost('password');
        $uesrsModel->find($iduser);
        $userprofilemodel->find($idprofile);
        $data=[
            'U_UserName'=>$this->request->getPost('username'),
            // 'U_Password'=>Hash::make($password),
            'U_State'=>$this->request->getPost('state'),
            'U_Permission'=>$this->request->getPost('permission'),
            'U_WorkPlace'=>$this->request->getPost('workPlace'),
            'U_UserID'=>$userinfo['U_UserName']
        ];
        $data2=[
            'P_FK'=>$this->request->getPost('profilefk'),
            'P_Create'=>$this->request->getPost('create'),
            'P_Update'=>$this->request->getPost('update'),
            'P_Delete'=>$this->request->getPost('delete'),
            'P_Dashboard'=>$this->request->getPost('dashboard'),
            'P_Users'=>$this->request->getPost('users'),
            'P_JobCard'=>$this->request->getPost('jobcard'),
            'P_Orders'=>$this->request->getPost('orders'),
            'P_Reports'=>$this->request->getPost('reports'),
            'P_State'=>$this->request->getPost('statevision'),
            'P_Brand'=>$this->request->getPost('brand'),
            'P_Color'=>$this->request->getPost('color'),
            'P_Permission'=>$this->request->getPost('permissionvision'),
            'P_CarType'=>$this->request->getPost('cartype'),
            'P_Company'=>$this->request->getPost('company'),
            'P_Kind'=>$this->request->getPost('kind'),
            'P_Model'=>$this->request->getPost('model'),
            'P_Side'=>$this->request->getPost('side'),
            'P_Unit'=>$this->request->getPost('unit'),
            'P_Specialization'=>$this->request->getPost('specialization'),
            'P_City'=>$this->request->getPost('city'),
            'P_WorkShops'=>$this->request->getPost('workshops'),
            'P_WorkShopPlace'=>$this->request->getPost('workshopplace'),
            'P_Workers'=>$this->request->getPost('workers'),
            'P_Currency'=>$this->request->getPost('currency'),
            'P_SalingGroup'=>$this->request->getPost('salinggroup'),
            'P_Accounts'=>$this->request->getPost('accounts'),
            'P_Customers'=>$this->request->getPost('customers'),
            'P_UserID'=>$userinfo['U_UserName'],
        ];
        
        $uesrsModel->update($iduser,$data);
        $userprofilemodel->update($idprofile,$data2);

        $data = ['status' => 'تم تحديث بيانات  المستخدم بنجاح'];
        return $this->response->setJSON($data);

    }

    public function getUsersAndProfile($id)
    {

        $builder = $this->db->table('tb_Users')
            ->select('*')
            ->join('tb_Permissions','tb_Permissions.P_FK=tb_Users.U_ID')
            ->where(['U_ID' => $id]);

        return $builder->get()->getResult();
    }
}
