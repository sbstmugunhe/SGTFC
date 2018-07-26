<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propostas Controller
 *
 * @property \App\Model\Table\PropostasTable $Propostas
 *
 * @method \App\Model\Entity\Proposta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropostasController extends AppController
{

    public function isAuthorized($user)
    {
    // Todos os utilizadores registrados podem adicionar artigos
        if ($this->request->getParam('action') === 'add') {
            return true;
        }

    // Apenas o proprietário da proposta pode editar e excluí
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $propostaId = (int)$this->request->getParam('pass.0');
            if ($this->Propostas->isOwnedBy($propostaId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    public function index()
    {
        $this->paginate = [
            'conditions'=>['estado'=> 'pendente'],
            'contain' => ['Areaspesquisas']
        ];
        $propostas = $this->paginate($this->Propostas);

        $this->set(compact('propostas'));
    }

//Lista de temas aprovados
    public function aprovados()
    {
        $this->paginate = [
            'conditions'=>['estado'=> 'aprovado'],
            'contain' => ['Areaspesquisas']
        ];
        $propostas = $this->paginate($this->Propostas);

        $this->set(compact('propostas'));
    }

//Lista de Temas reprovados
    public function reprovados()
    {
        $this->paginate = [
            'conditions'=>['estado'=> 'reprovado'],
            'contain' => ['Areaspesquisas']
        ];
        $propostas = $this->paginate($this->Propostas);

        $this->set(compact('propostas'));
    }

    /**
     * View method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proposta = $this->Propostas->get($id, [
            'contain' => ['Areaspesquisas', 'Trabalhos']
        ]);

        $this->set('proposta', $proposta);
    }


    public function submeter($id = null)
    {
        //$trabalho = $this->Propostas->Trabalhos->newEntity();
        $proposta = $this->Propostas->get($id, [
            'contain' => ['Areaspesquisas', 'Trabalhos']
        ]);

        $this->set('proposta', $proposta);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proposta = $this->Propostas->newEntity();
        if ($this->request->is('post')) {
            $proposta = $this->Propostas->patchEntity($proposta, $this->request->data);
            if ($this->Propostas->save($proposta)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Proposta'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Proposta'));
            }
        }
        $areaspesquisas = $this->Propostas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('proposta', 'areaspesquisas'));
        $this->set('_serialize', ['proposta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proposta = $this->Propostas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proposta = $this->Propostas->patchEntity($proposta, $this->request->data);
            if ($this->Propostas->save($proposta)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Proposta'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Proposta'));
            }
        }
        $areaspesquisas = $this->Propostas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('proposta', 'areaspesquisas'));
        $this->set('_serialize', ['proposta']);
    }


    public function avaliar($id = null)
    {
        $proposta = $this->Propostas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proposta = $this->Propostas->patchEntity($proposta, $this->request->data);
            if ($this->Propostas->save($proposta)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Proposta'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Proposta'));
            }
        }
        $proposta = $this->Propostas->get($id, [
            'contain' => ['Areaspesquisas', 'Trabalhos']
        ]);
        $areaspesquisas = $this->Propostas->Areaspesquisas->find('list', ['limit' => 200]);
        $this->set(compact('proposta', 'areaspesquisas'));
        $this->set('_serialize', ['proposta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proposta = $this->Propostas->get($id);
        if ($this->Propostas->delete($proposta)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Proposta'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Proposta'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
