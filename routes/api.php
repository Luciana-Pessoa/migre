// routes/api.php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PrestadorController;

Route::post('auth/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
Route::get('servicos', [ServicoController::class, 'index']);
Route::get('endereco/geocode/{endereco}', [EnderecoController::class, 'geocode']);
Route::post('prestadores', [PrestadorController::class, 'buscar']);
});