// tests/Feature/EnderecoTest.php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnderecoTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_get_coordinates()
    {
        // Autenticação de um usuário para o teste
        $user = User::factory()->create();
        Passport::actingAs($user);

        // Teste de busca de coordenadas
        $response = $this->getJson('/api/endereco/geocode/Sao+Paulo');

        // Verificação da resposta
        $response->assertStatus(200)
                 ->assertJsonStructure(['latitude', 'longitude']);
    }
}
