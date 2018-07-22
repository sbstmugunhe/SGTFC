<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estudantes Controller
 *
 * @property \App\Model\Table\EstudantesTable $Estudantes
 *
 * @method \App\Model\Entity\Estudante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstudantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Occupations']
        ];
        $estudantes = $this->paginate($this->Estudantes);

        $this->set(compact('estudantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Estudante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estudante = $this->Estudantes->get($id, [
            'contain' => ['Occupations']
        ]);

        $this->set('estudante', $estudante);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estudante = $this->Estudantes->newEntity();
        if ($this->request->is('post')) {
            $estudante = $this->Estudantes->patchEntity($estudante, $this->request->data);
            if ($this->Estudantes->save($estudante)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estudante'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estudante'));
            }
        }
        $occupations = $this->Estudantes->Occupations->find('list', ['limit' => 200]);
        $this->set(compact('estudante', 'occupations'));
        $this->set('_serialize', ['estudante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estudante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estudante = $this->Estudantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estudante = $this->Estudantes->patchEntity($estudante, $this->request->data);
            if ($this->Estudantes->save($estudante)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estudante'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estudante'));
            }
        }
        $occupations = $this->Estudantes->Occupations->find('list', ['limit' => 200]);
        $this->set(compact('estudante', 'occupations'));
        $this->set('_serialize', ['estudante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estudante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estudante = $this->Estudantes->get($id);
        if ($this->Estudantes->delete($estudante)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Estudante'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Estudante'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
