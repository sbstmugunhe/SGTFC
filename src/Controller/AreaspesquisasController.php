<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Areaspesquisas Controller
 *
 * @property \App\Model\Table\AreaspesquisasTable $Areaspesquisas
 *
 * @method \App\Model\Entity\Areaspesquisa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreaspesquisasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $areaspesquisas = $this->paginate($this->Areaspesquisas);

        $this->set(compact('areaspesquisas'));
    }

    /**
     * View method
     *
     * @param string|null $id Areaspesquisa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaspesquisa = $this->Areaspesquisas->get($id, [
            'contain' => ['Temas']
        ]);

        $this->set('areaspesquisa', $areaspesquisa);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaspesquisa = $this->Areaspesquisas->newEntity();
        if ($this->request->is('post')) {
            $areaspesquisa = $this->Areaspesquisas->patchEntity($areaspesquisa, $this->request->data);
            if ($this->Areaspesquisas->save($areaspesquisa)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Areaspesquisa'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Areaspesquisa'));
            }
        }
        $this->set(compact('areaspesquisa'));
        $this->set('_serialize', ['areaspesquisa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Areaspesquisa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaspesquisa = $this->Areaspesquisas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaspesquisa = $this->Areaspesquisas->patchEntity($areaspesquisa, $this->request->data);
            if ($this->Areaspesquisas->save($areaspesquisa)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Areaspesquisa'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Areaspesquisa'));
            }
        }
        $this->set(compact('areaspesquisa'));
        $this->set('_serialize', ['areaspesquisa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Areaspesquisa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaspesquisa = $this->Areaspesquisas->get($id);
        if ($this->Areaspesquisas->delete($areaspesquisa)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Areaspesquisa'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Areaspesquisa'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
