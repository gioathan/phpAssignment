<?php

namespace App\Controllers;

use App\Models\Candidate;

class Candidates extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $model = new Candidate($db);
        $candidates = $model->get()->getResultArray();
        foreach ($candidates as $cand){
            $index = array_search($cand, $candidates);
            if ($cand['active'] === '1'){
                $candidates[$index]['active'] = 'Yes';
            } else {
                $candidates[$index]['active'] = 'No';
            }
        };

        $data = [
            'candidates' => $candidates
        ];

        return view('candidates/dir', $data);
        // print_r($data['candidates']);
    }


    public function add($id=null)
    {   
        if ($id === null)
        {
            $data = [
                'title' => 'Add a New Candidate',
                'firstname' => '',
                'lastname' => '',
                'date_of_birth' => '',
                'active' => '',
                'cover_text' => ''
            ];
    
    
            if ($_POST){
                $rules = [
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'date_of_birth' => 'required',
                    'active' => 'required',
                    'cover_text' => 'required'
                ];
                
                if ($this->validate($rules)){
    
    
                    $cand_data = $this->request->getPost();
                    $db = db_connect();
                    $model = new Candidate($db);
                    $model->save($cand_data);
    
                    return redirect()->to('/');
                } else {
                    $data['validation'] = $this->validator;
                }
    
            }
        } else {

            $db = db_connect();
            $model = new Candidate($db);
            $post = $model->find($id);

            $firstname = $post['firstname'];
            $lastname = $post['lastname'];

            $data = [
                'title' => "Edit Candidate $firstname $lastname",
                'firstname' => $firstname,
                'lastname' => $lastname,
                'date_of_birth' => $post['date_of_birth'],
                'active' => $post['active'],
                'cover_text' => $post['cover_text']
            ];

            if ($_POST){
                
                $_POST['id'] = $id;
                $model->save($_POST);

                return redirect()->to('/');
            }

        }

    
        return view('add', $data);
    }

    public function delete($id)
    {
        $db = db_connect();
        $model = new Candidate($db);
        $post = $model->find($id);
        if($post){
            $model->delete($id);
            return redirect()->to('/candidates');
        }
    }

}



