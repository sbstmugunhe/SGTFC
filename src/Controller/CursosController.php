<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cursos Controller
 *
 * @property \App\Model\Table\CursosTable $Cursos
 *
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Utilizadores']
        ];
        $cursos = $this->paginate($this->Cursos);

        $this->set(compact('cursos'));
    }

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => ['Utilizadores']
        ]);

        $this->set('curso', $curso);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $curso = $this->Cursos->newEntity();
        if ($this->request->is('post')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Curso'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Curso'));
            }
        }
        $utilizadores = $this->Cursos->Utilizadores->find('list', ['limit' => 200]);
        $this->set(compact('curso', 'utilizadores'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->data);
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Curso'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Curso'));
            }
        }
        $utilizadores = $this->Cursos->Utilizadores->find('list', ['limit' => 200]);
        $this->set(compact('curso', 'utilizadores'));
        $this->set('_serialize', ['curso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Curso'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Curso'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
