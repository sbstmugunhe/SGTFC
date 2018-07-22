<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupations Controller
 *
 * @property \App\Model\Table\OccupationsTable $Occupations
 *
 * @method \App\Model\Entity\Occupation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OccupationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $occupations = $this->paginate($this->Occupations);

        $this->set(compact('occupations'));
    }

    /**
     * View method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => ['Estudantes']
        ]);

        $this->set('occupation', $occupation);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupation = $this->Occupations->newEntity();
        if ($this->request->is('post')) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Occupation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Occupation'));
            }
        }
        $this->set(compact('occupation'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Occupation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Occupation'));
            }
        }
        $this->set(compact('occupation'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupation = $this->Occupations->get($id);
        if ($this->Occupations->delete($occupation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Occupation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Occupation'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
