<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actividades Controller
 *
 * @property \App\Model\Table\ActividadesTable $Actividades
 *
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActividadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Trabalhos']
        ];
        $actividades = $this->paginate($this->Actividades);

        $this->set(compact('actividades'));
    }

    /**
     * View method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => ['Trabalhos']
        ]);

        $this->set('actividade', $actividade);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actividade = $this->Actividades->newEntity();
        if ($this->request->is('post')) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->data);
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Actividade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Actividade'));
            }
        }
        $trabalhos = $this->Actividades->Trabalhos->find('list', ['limit' => 200]);
        $this->set(compact('actividade', 'trabalhos'));
        $this->set('_serialize', ['actividade']);
    }

    public function adicionar($trabalho_id = null)
    {
        $actividade = $this->Actividades->newEntity();
        if ($this->request->is('post')) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->data);
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Actividade'));
                return $this->redirect(['controller' => 'trabalhos', 'action' => 'view', $trabalho_id]);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Actividade'));
            }
        }
        $trabalhos = $this->Actividades->Trabalhos->find('list', ['limit' => 200]);
        $this->set(compact('actividade', 'trabalhos', 'trabalho_id'));
        $this->set('_serialize', ['actividade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actividade = $this->Actividades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividade = $this->Actividades->patchEntity($actividade, $this->request->data);
            if ($this->Actividades->save($actividade)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Actividade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Actividade'));
            }
        }
        $trabalhos = $this->Actividades->Trabalhos->find('list', ['limit' => 200]);
        $this->set(compact('actividade', 'trabalhos'));
        $this->set('_serialize', ['actividade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actividade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividade = $this->Actividades->get($id);
        if ($this->Actividades->delete($actividade)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Actividade'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Actividade'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
