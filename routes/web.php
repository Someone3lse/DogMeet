<?php
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/login', 'login');
Route::view('/dicas', 'dicas');
Route::view('/denuncia', 'denuncia');

Route::get('/animais', function () {
    $animais = Animal::all();
    return view('animais', compact('animais'));
});

Route::get('/cadastro-animal', function () {
    return view('cadastro-animal');
})->middleware('auth');

Route::get('/animal/{id}', function ($id) {
    $animal = Animal::findOrFail($id);
    return view('animal-detalhes', compact('animal'));
});

Route::post('/login', function (Request $request) {

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {

        $request->session()->regenerate();

        return redirect('/admin');
    }

    return back()->with('erro', 'Login inválido');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::post('/cadastro-animal', function (Request $request) {

    Animal::create([
        'user_id' => Auth::id(),
        'nome' => $request->nome,
        'especie' => $request->especie,
        'raca' => $request->raca,
        'idade' => $request->idade,
        'descricao' => $request->descricao,
        'contato' => $request->contato,
        'status' => 'Disponível'
    ]);

    return redirect('/animais');

})->middleware('auth');