<?php

namespace App\Controllers;

use App\Models\Users_M;
use App\Models\Color_M;


class Color_C extends BaseController
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
            'title'=> 'Color',
            'userName'=>$userinfo['U_UserName']
        ];

        return view('informations/color', $data);
    }


    public function fetch()
    {
        $param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $order = isset($_REQUEST['order']) ? $_REQUEST['order'] : '';
        $search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

        $Color = new Color_M();
        $data = $Color->searchAndDisplay($search_value, $start, $length, $order);
        $total_count = $Color->searchAndDisplay($search_value);

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

        $Color = new Color_M();
        $data = [
            'Co_Name' => $this->request->getPost('co_name'),
            'Co_UserID' => $userinfo['U_UserName'],
        ];

        $Color->save($data);
        $data = ['status' => 'Adding Data Successfully..'];
        return $this->response->setJSON($data);
    }

    public function edit()
    {
        $Color = new Color_M();
        $id = $this->request->getGet('getid');
        $data = [
            'color' => $Color->find($id),
        ];

        return $this->response->setJSON($data);
    }

    public function update()
    {
        $users = new Users_M();
        $Color =new Color_M();
        $loggedUserId = session()->get('loggedUser');

        $userinfo = $users->find($loggedUserId);
        $id = $this->request->getPost('co_id');
        $Color->find($id);

        $data = [
            'Co_Name' => $this->request->getPost('co_name'),
            'Co_UserID' => $userinfo['U_UserName'],
        ];

        $Color->update($id, $data);
        $data = ['status' => 'Updated Successfully...'];
        return $this->response->setJSON($data);
    }

    public function delete()
    {
        $Color = new Color_M();
        $id = $this->request->getPost('getid');
        $Color->delete($id);
        $data = ['status' => 'Deleted Data Successfully..'];
        return $this->response->setJSON($data);
    }
}
