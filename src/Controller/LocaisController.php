<?php
declare(strict_types=1);

namespace App\Controller;

use Jarouche\ViaCEP\HelperViaCep;
use Cake\Http\Middleware\CsrfProtectionMiddleware;

class LocaisController extends AppController
{
    public function index()
    {
        $locais = $this->paginate($this->Locais);

        $this->set(compact('locais'));
    }

    public function view($id = null)
    {
        $local = $this->Locais->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('local'));
    }

    public function add()
    {
        $local = $this->Locais->newEmptyEntity();
        if ($this->request->is('post')) {
            $local = $this->Locais->patchEntity($local, $this->request->getData());
            if ($this->Locais->save($local)) {
                $this->Flash->success(__('O local foi salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O local não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('local'));
    }

    public function edit($id = null)
    {
        $local = $this->Locais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locai = $this->Locais->patchEntity($local, $this->request->getData());
            if ($this->Locais->save($local)) {
                $this->Flash->success(__('Local salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O local não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('local'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $local = $this->Locais->get($id);
        if ($this->Locais->delete($local)) {
            $this->Flash->success(__('O local foi deletado.'));
        } else {
            $this->Flash->error(__('O local não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function find()
    {
        $this->request->allowMethod('post');

        $cep = $this->request->input('json_decode', true)['cep'];
        $viaCEP = HelperViaCep::getBuscaViaCEP('JSON', $cep)['result'];

        return $this->response->withType("application/json")
            ->withStringBody(json_encode($viaCEP));
    }
}
