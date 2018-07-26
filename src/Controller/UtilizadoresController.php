<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utilizadores Controller
 *
 * @property \App\Model\Table\UtilizadoresTable $Utilizadores
 *
 * @method \App\Model\Entity\Utilizadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UtilizadoresController extends AppController
{

    public function home()
    {

    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $utilizadore = $this->Auth->identify();
            if($utilizadore){
                $this->Auth->setUser($utilizadore);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error('Dados Invalidos, por favor tente novamente', ['key' => 'auth']);

            }
        }
    }

    
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos']
        ];
        $utilizadores = $this->paginate($this->Utilizadores);

        $this->set(compact('utilizadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Utilizadore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilizadore = $this->Utilizadores->get($id, [
            'contain' => ['Grupos', 'Cursos']
        ]);

        $this->set('utilizadore', $utilizadore);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilizadore = $this->Utilizadores->newEntity();
        if ($this->request->is('post')) {
            $utilizadore = $this->Utilizadores->patchEntity($utilizadore, $this->request->data);
            if ($this->Utilizadores->save($utilizadore)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Utilizadore'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Utilizadore'));
            }
        }
        $grupos = $this->Utilizadores->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('utilizadore', 'grupos'));
        $this->set('_serialize', ['utilizadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilizadore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilizadore = $this->Utilizadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilizadore = $this->Utilizadores->patchEntity($utilizadore, $this->request->data);
            if ($this->Utilizadores->save($utilizadore)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Utilizadore'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Utilizadore'));
            }
        }
        $grupos = $this->Utilizadores->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('utilizadore', 'grupos'));
        $this->set('_serialize', ['utilizadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilizadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilizadore = $this->Utilizadores->get($id);
        if ($this->Utilizadores->delete($utilizadore)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Utilizadore'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Utilizadore'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
