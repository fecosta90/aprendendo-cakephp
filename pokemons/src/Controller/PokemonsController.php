<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pokemons Controller
 *
 * @property \App\Model\Table\PokemonsTable $Pokemons
 */
class PokemonsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pokemons', $this->paginate($this->Pokemons));
        $this->set('_serialize', ['pokemons']);
    }

    /**
     * View method
     *
     * @param string|null $id Pokemon id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pokemon = $this->Pokemons->get($id, [
            'contain' => []
        ]);
        $this->set('pokemon', $pokemon);
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pokemon = $this->Pokemons->newEntity();
        if ($this->request->is('post')) {
            $pokemon = $this->Pokemons->patchEntity($pokemon, $this->request->data);
            if ($this->Pokemons->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemon'));
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pokemon id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pokemon = $this->Pokemons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pokemon = $this->Pokemons->patchEntity($pokemon, $this->request->data);
            if ($this->Pokemons->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemon'));
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pokemon = $this->Pokemons->get($id);
        if ($this->Pokemons->delete($pokemon)) {
            $this->Flash->success(__('The pokemon has been deleted.'));
        } else {
            $this->Flash->error(__('The pokemon could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
