use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicoSeeder extends Seeder
{
public function run()
{
Servico::factory()->count(10)->create();
}
}