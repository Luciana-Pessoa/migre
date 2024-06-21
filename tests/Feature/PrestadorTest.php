// tests/Feature/PrestadorTest.php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PrestadorTest extends TestCase
{
use RefreshDatabase;

public function test_user_can_search_prestadores()
{
// Autenticação de um usuário para o teste
$user = User::factory()->create();
Passport::actingAs($user);

// Dados de entrada para a busca de prestadores
$payload = [
'origem' => [
'cidade' => 'São Paulo',
'UF' => 'SP',
'latitude' => -23.55052,
'longitude' => -46.633308
],
'destino' => [
'cidade' => 'Rio de Janeiro',
'UF' => 'RJ',
'latitude' => -22.906847,
'longitude' => -43.172896
],
'idServico' => 1,
'quantidade' => 10,
'ordenacao' => ["valor_total", "distancia_total"],
'filtros' => [
'cidade' => 'São Paulo',
'estado' => 'SP',
'status' => 'online'
]
];

// Teste de busca de prestadores
$response = $this->postJson('/api/prestadores', $payload);

// Verificação da resposta
$response->assertStatus(200)
->assertJsonStructure([
'*' => [
'id', 'nome', 'logradouro', 'bairro', 'numero', 'latitude', 'longitude',
'cidade', 'UF', 'situacao', 'status', 'distancia_total', 'valor_total'
]
]);
}
}