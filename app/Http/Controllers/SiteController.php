<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contato;
use App\Models\Evento;
use App\Models\Newsletter;
use App\Models\Pacote;
use App\Models\Tema;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $banners = Banner::all()->reverse();
        $eventos = Evento::all()->reverse();
        $pacotes = Pacote::all();
        return view('site.index', compact(
            'eventos',
            'banners',
            'pacotes'));
    }

    public function temasPage(Tema $temas)
    {
        return view('site.temas', compact('temas'));
    }

    public function temasViewPage($slug)
    {
        $tema = Tema::findBySlug($slug);
        return view('site.tema', compact('tema'));
    }

    public function pacotesPage(Pacote $pacotes)
    {
        return view('site.pacotes', compact('pacotes'));
    }

    public function pacotesViewPage($slug)
    {
        $pac = Pacote::findBySlug($slug);
        return view('site.pacote', compact('pac'));
    }

    public function newsletter(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:newsletters,email'
        ], [
            'name.required' => 'Por favor, digite seu nome',
            'name.min' => 'Seu nome está correto?',
            'email.required' => 'Por favor, digite seu email',
            'email.email' => 'Email inválido!',
            'email.unique' => 'Este e-mail já está cadastrado'
        ]);
        if ($validator->passes()) {
            Newsletter::create([
                'name' => $request->name,
                'email' => $request->email,
                'status' => 1
            ]);
            toastr()->success('A partir de agora você será informado de nossas ofertas e novidades!', 'Parabéns pela escolha!');

            return back();
        }
        toastr()->error('Verifique se os campos estão corretos!', 'Whoops!');
        return back()->withErrors($validator->errors())->withInput();
    }

    public function faleConoscoPage()
    {
        return view('site.fale-conosco');
    }

    public function realizarContato(Request $request)
    {
        $validator = \Validator::make($request->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'text' => 'required|min:15',
            ], [
                'name.required' => 'Por favor, diga seu nome',
                'name.min' => 'Seu nome está correto?',
                'email.required' => 'Por favor, informe seu email',
                'email.email' => 'Email inválido',
                'text.required' => 'Por favor, fale mais um pouco',
                'text.min' => 'Por favor, fale mais um pouco'
            ]);
        if ($validator->passes()) {
            Contato::create($request->all());
            toastr()->success('Em breve lhe retornaremos', 'Recebemos seu contato!');
        }

        toastr()->error('Verifique se os campos estão corretos!', 'Whoops!');
        return back()->withErrors($validator->errors())->withInput();
    }

}
