<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Trabalhos Controller
 *
 * @property \App\Model\Table\TrabalhosTable $Trabalhos
 *
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrabalhosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Propostas']
        ];
        $trabalhos = $this->paginate($this->Trabalhos);

        $this->set(compact('trabalhos'));
    }

    /**
     * View method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabalho = $this->Trabalhos->get($id, [
            'contain' => ['Propostas', 'Actividades']
        ]);

        $this->set('trabalho', $trabalho);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabalho = $this->Trabalhos->newEntity();
        if ($this->request->is('post')) {
            $trabalho = $this->Trabalhos->patchEntity($trabalho, $this->request->data);
            if ($this->Trabalhos->save($trabalho)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Trabalho'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Trabalho'));
            }
        }
        $propostas = $this->Trabalhos->Propostas->find('list', ['limit' => 200]);
        $this->set(compact('trabalho', 'propostas'));
        $this->set('_serialize', ['trabalho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabalho = $this->Trabalhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabalho = $this->Trabalhos->patchEntity($trabalho, $this->request->data);
            if ($this->Trabalhos->save($trabalho)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Trabalho'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Trabalho'));
            }
        }
        $propostas = $this->Trabalhos->Propostas->find('list', ['limit' => 200]);
        $this->set(compact('trabalho', 'propostas'));
        $this->set('_serialize', ['trabalho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabalho = $this->Trabalhos->get($id);
        if ($this->Trabalhos->delete($trabalho)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Trabalho'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Trabalho'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
