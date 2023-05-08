<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\GroupsModel;

class Groups extends ResourcePresenter
{

    function __construct(){
        $this->group = new GroupsModel();
    }

    protected $helpers = ['custom'];

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['groups'] = $this->group->findAll();
        return view('group/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('group/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->group->insert($data);
        if($this->group->affectedRows() > 0){
            return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Disimpan!');
        }
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $group = $this->group->where('id_group', $id)->first();
        if(is_object($group)){
            $data['group'] = $group;
            return view('group/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->group->update($id, $data);
        if($this->group->affectedRows() > 0){
            return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Diupdate!');
        }
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->group->delete($id);
        if($this->group->affectedRows() > 0){
            return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Dihapus!');
        }
    }

    public function trash()
    {
        $data['groups'] = $this->group->onlyDeleted()->findAll();
        return view('group/trash', $data);
    }

    public function restore($id = null)
    {
        if($id != null){
            $this->group
                ->set('deleted_at', null, true)
                ->where('id_group', $id)
                ->update();
            if($this->group->affectedRows() > 0){
                return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Direstore!');
            }
        } else {
            $this->group
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', null, false)
                ->update();
            if($this->group->affectedRows() > 0){
                return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Direstore Semua!');
            }
        }
    }

    public function deletePermanent($id = null)
    {
        if($id != null){
            $this->group->delete($id, true);
            return redirect()->to(site_url('groups/trash'))->with('success', 'Data Berhasil Dihapus Permanen!');
        } else {
            $this->group->purgeDeleted();
            return redirect()->to(site_url('groups'))->with('success', 'Data Berhasil Dihapus!');
        }
        
        if($this->group->affectedRows() > 0){
            
        }
    }
}
