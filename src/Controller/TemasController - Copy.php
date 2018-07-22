<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Temas Controller
 *
 * @property \App\Model\Table\TemasTable $Temas
 *
 * @method \App\Model\Entity\Tema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TemasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'conditions'=>['estado'=> 1],
            'contain' => ['Areaspesquisas']
        ];
        $temas = $this->paginate($this->Temas);

        $this->set(compact('temas'));
    }


//Lista de temas por avaliar
    public function temasporavaliar()
    {
        $this->paginate = [
            'conditions'=>['estado'=> 0],
            'contain' => ['Areaspesquisas']
        ];
        $temas = $this->paginate($this->Temas);

        $this->set(compact('temas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => ['Areaspesquisas']
        ]);

        $this->set('tema', $tema);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tema = $this->Temas->newEntity();
        if ($this->request->is('post')) {
            $tema = $this->Temas->patchEntity($tema, $this->request->data);
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tema'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tema'));
            }
        }
        $areaspesquisas = $this->Temas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'areaspesquisas'));
        $this->set('_serialize', ['tema']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tema = $this->Temas->patchEntity($tema, $this->request->data);
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tema'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tema'));
            }
        }
        $areaspesquisas = $this->Temas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'areaspesquisas'));
        $this->set('_serialize', ['tema']);
    }


    public function avaliartema($id = null)
    {
        $tema = $this->Temas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tema = $this->Temas->patchEntity($tema, $this->request->data);
            if ($this->Temas->save($tema)) {
                $this->Flash->success(__('Este {0} foi avalido com sucesso', 'Tema'));
                return $this->redirect(['action' => 'temasporavaliar']);
            } else {
                $this->Flash->error(__('Este {0} não foi avaliado. Tente novamente.', 'Tema'));
            }
        }
        $areaspesquisas = $this->Temas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('tema', 'areaspesquisas'));
        $this->set('_serialize', ['tema']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tema id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tema = $this->Temas->get($id);
        if ($this->Temas->delete($tema)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tema'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tema'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
