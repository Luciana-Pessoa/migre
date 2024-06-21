// tests/Feature/ServicoTest.php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServicoTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_servicos()
    {
        // Autenticação de um usuário para o teste
        $user = User::factory()->create();
        Passport::actingAs($user);

        // Teste de visualização de serviços
        $response = $this->getJson('/api/servicos');

        // Verificação da resposta
        $response->assertStatus(200);
    }
}
