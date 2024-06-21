// app/Http/Controllers/ServicoController.php

namespace App\Http\Controllers;

use App\Models\Servico;

class ServicoController extends Controller
{
public function index()
{
return response()->json(Servico::all());
}
}