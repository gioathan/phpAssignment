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


    public function add()
    {   
        $data = [];

        if ($_POST){
            $rules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'date_of_birth' => 'required',
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
    
        return view('add', $data);
    }
}
