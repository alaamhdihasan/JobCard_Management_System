<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Brand_M;


class Brand_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $users = new Users_M();;
        $loggedUserId = session()->get('loggedUser');
        $userinfo = $users->find($loggedUserId);
        $data=[
            'title'=>'Brand',
            'userName'=>$userinfo['U_UserName']
        ]; 


        return view('informations/Brand', $data);
    }

    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Brand = new Brand_M();
        $data = $Brand->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Brand->searchAndDisplay($search_value);

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

        $Brand = new Brand_M();
        $data = [
            'B_Name' => $this->request->getPost('b_name'),
            'B_UserID' => $userinfo['U_UserName'],
        ];

        $Brand->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Brand = new Brand_M();
        $id = $this->request->getGet('getid');
        $data = [
            'brand' => $Brand->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Brand =new Brand_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('b_id');
        $Brand->find($id);

        $data = [
            'B_Name' => $this->request->getPost('b_name'),
            'B_UserID' => $userinfo['U_UserName'],
        ];

        $Brand->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Brand = new Brand_M();
        $id = $this->request->getPost('getid');
        $Brand->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }  
}
