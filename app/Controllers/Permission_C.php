<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Permission_M;


class Permission_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $users = new Users_M();
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $data=[
            'title'=> 'Permission',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/Permission', $data);
    }


    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Permission = new Permission_M();
        $data = $Permission->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Permission->searchAndDisplay($search_value);

        $json_data = array(
            'draw' => intval($param['draw']),
            'recordsTotal' => count($total_count),
            'recordsFiltered' => count($total_count),
            'data' => $data
        );
        
        return $this->response->setJSON($json_data);
    }

    public function store()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);

        $Permission = new Permission_M();
        $data = [
            'Pe_Name' => $this->request->getPost('pe_name'),
            'Pe_UserID' => $userinfo['U_UserName'],
        ];

        $Permission->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Permission = new Permission_M();
        $id = $this->request->getGet('getid');
        $data = [
            'Permission' => $Permission->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Permission =new Permission_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('Pe_id');
        $Permission->find($id);

        $data = [
            'Pe_Name' => $this->request->getPost('pe_name'),
            'Pe_UserID' => $userinfo['U_UserName'],
        ];

        $Permission->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Permission = new Permission_M();
        $id = $this->request->getPost('getid');
        $Permission->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }  
}
